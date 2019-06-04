<?php 
	header('Content-type: application/json');
	/* comprobamos que el usuario nos viene como un parametro */
	if(isset($_GET['user']) && intval($_GET['user'])) {

		$user_id = intval($_GET['user']); 

		/* conectamos a la bd */
		//$link = mysql_connect('localhost','usuario','password') or die('No se puede conectar a la BD');
		//mysql_select_db('nombrebd',$link) or die('No se puede seleccionar la BD');

		/* sacamos los posts de bd */
		//$query = "SELECT post_title, guid FROM wp_posts WHERE post_author = $user_id AND post_status = 'publish' ORDER BY ID DESC LIMIT $number_of_posts";
		//$result = mysql_query($query,$link) or die('Query no funcional:  '.$query);

		/* creamos el array con los datos */
		
		echo json_encode(array(
			'result' => 'wena',
			'mundo' => 'mundo'
		));

		/* nos desconectamos de la bd */
		@mysql_close($link);
	}
 ?>