<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pjenfermagem";

$conn = mysqli_connect($servername, $username, $password, $dbname);

//Receber a requisão da pesquisa 
$requestData= $_REQUEST;


//Indice da coluna na tabela visualizar resultado => nome da coluna no banco de dados
$columns = array( 
	0 => 'pac_nome',
	0 => 'pac_sobrenome', 
	1 => 'age_camp',
	2=>  'age_hora',
	3 => 'age_dt', 
	4 => 'age_rua',
	5=>  'age_num'
);

//Obtendo registros de número total sem qualquer pesquisa
$result_user = "select pac_nome, pac_sobrenome, age_camp, age_hora, age_dt, age_rua, age_num from agenda JOIN paciente where age_pac_id = pac_id";
$resultado_user =mysqli_query($conn, $result_user);
$qnt_linhas = mysqli_num_rows($resultado_user);

//Obter os dados a serem apresentados
$result_usuarios = "select pac_nome, pac_sobrenome, age_camp, age_hora, age_dt, age_rua, age_num from agenda JOIN paciente where age_pac_id = pac_id and age_status != 'INATIVO'";
if( !empty($requestData['search']['value']) ) {   // se houver um parâmetro de pesquisa, $requestData['search']['value'] contém o parâmetro de pesquisa
	$result_usuarios.=" AND ( pac_nome LIKE '".$requestData['search']['value']."%' ";    
	$result_usuarios.=" OR pac_sobrenome LIKE '".$requestData['search']['value']."%' ";
	$result_usuarios.=" OR age_camp LIKE '".$requestData['search']['value']."%' ";
	$result_usuarios.=" OR age_hora LIKE '".$requestData['search']['value']."%' ";
	$result_usuarios.=" OR age_dt LIKE '".$requestData['search']['value']."%' ";
	$result_usuarios.=" OR age_rua LIKE '".$requestData['search']['value']."%' ";
	$result_usuarios.=" OR age_num LIKE '".$requestData['search']['value']."%' )";
}

$resultado_usuarios=mysqli_query($conn, $result_usuarios);
$totalFiltered = mysqli_num_rows($resultado_usuarios);
//Ordenar o resultado
$result_usuarios.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
$resultado_usuarios=mysqli_query($conn, $result_usuarios);

// Ler e criar o array de dados
$dados = array();
while( $row_usuarios =mysqli_fetch_array($resultado_usuarios) ) {  
	$dado = array(); 
	$dado[] = $row_usuarios["pac_nome"] ." ". $row_usuarios["pac_sobrenome"];
	$dado[] = $row_usuarios["age_camp"];
	$dado[] = $row_usuarios["age_hora"];
	$dado[] = $row_usuarios["age_dt"];
	$dado[] = $row_usuarios["age_rua"];
	$dado[] = $row_usuarios["age_num"];	
	$dados[] = $dado;
}


//Cria o array de informações a serem retornadas para o Javascript
$json_data = array(
	"draw" => intval( $requestData['draw'] ),//para cada requisição é enviado um número como parâmetro
	"recordsTotal" => intval( $qnt_linhas ),  //Quantidade de registros que há no banco de dados
	"recordsFiltered" => intval( $totalFiltered ), //Total de registros quando houver pesquisa
	"data" => $dados   //Array de dados completo dos dados retornados da tabela 
);

echo json_encode($json_data);  //enviar dados como formato json
