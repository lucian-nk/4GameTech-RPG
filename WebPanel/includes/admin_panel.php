<?php
include 'includes/config.php';
if(isset($udata['AdminLevel']) && $udata['AdminLevel'] <= 3)
	die();
redirect_not_logged();
include 'includes/header.php';

define('PLAYERS_TABLE', 'players');

// exclude columns from table..
$exc = array('id');
$permissions = array(
	1 => array(
		'edit' => array(''),
		'hide' => array('Password'),
	),
	2 => array(
		'edit' => array(''),
		'hide' => array('Password'),
	),
	3 => array(
		'edit' => array(''),
	),
	4 => array(
		'edit' => 'all',
		'readonly'=> array('Agent', 'AdminLevel', 'Member', 'Leader', 'Bank', 'Money', 'Fpunish'),
        'hide' => array('Password'),
	),
	5 => array(
		'edit' => 'all',
		'readonly' => array('AdminLevel', 'Bank', 'Money', 'Password', 'Fpunish'),
        'hide' => array('Password'),
	),
	6 => array(
		// Z3ulzz00rrrrrr
		'edit' => 'all',
		'hide' => array('Password'),
	)
);
?>
<h1>Panel Admin</h1>
<?php
$found = 0; // :(

if(isset($_GET['player'])){
	$player = sec($_GET['player']);
	
	$Yoo = get_row("SELECT * FROM ".PLAYERS_TABLE." WHERE Name='$player'");
	if(isset($Yoo['id']) && $udata['AdminLevel'] > 0){
		if($Yoo['AdminLevel'] == 0 || ($udata['AdminLevel'] == 6))
			$found = 1; // win!
		else
			$found = 2;
	}else if(isset($Yoo['id']) && $udata['AdminLevel'] == 0){
		$found = 3;
	}
}

if($found == 1){
	$player = sec($_GET['player']);

	$Yoo_ID = $Yoo['id'];
	foreach($exc as $TRANCETRAFFIC){
		unset($Yoo[$TRANCETRAFFIC]);
	}

	$permissions = $permissions[$udata['AdminLevel']];
	foreach(array('edit', 'hide', 'readonly') as $item){
		${'p_'.$item} = isset($permissions[$item]) ? $permissions[$item] : array();
	}

	if(!empty($_POST) && $udata['AdminLevel'] > 0){
		$cols = array();
		foreach($_POST as $key => $val){
		
			if(array_key_exists($key, $Yoo)
				&& ((is_array($p_edit) && in_array($key, $p_edit)) || $p_edit == 'all')
				&&(is_array($p_readonly) && !in_array($key, $p_readonly))
			){
				// $val = sec($val);
				$cols[] = "`$key`='$val'";
				$Yoo[$key] = $val;
			}
		}

		if(count($cols) > 0){
			// Perfecto Mix
			query('UPDATE '.PLAYERS_TABLE.' SET '.implode(',', $cols).' WHERE id='.$Yoo_ID);
			$saved = 1;
		}
	}
	
	$x = '';
	$x .= '<form action="admin_panel.php?player='.htmlentities($_GET['player']).'" method="POST" />';
		$x .= isset($saved) ? '<p style="color:#ff0000;font-weight:bold;">Datele au fost salvate!</p>' : '';
		$x .= '<table>';
			foreach($Yoo as $key => $val){
				if(!in_array($key, $p_hide)){
					$x .= '<tr>';
						$x .= '<td>'.$key.'</td>';

						if(((is_array($p_edit) && in_array($key, $p_edit)) || $p_edit == 'all') &&
						(is_array($p_readonly) && !in_array($key, $p_readonly))
						){
							$x .= '<td><input type="text" name="'.$key.'" value="'.htmlentities(stripslashes($val)).'" /></td>';
						}else{
							$x .= '<td>'.$val.'</td>';
						}
					$x .= '</tr>';
				}
			}
		$x .= '</table>';
		$x .= '<input type="submit" value="Salveaza" />';
	$x .= '</form>';

	echo $x;
}else{
	if(isset($found) && $found==2){
		echo '<p style="color:#ff0000;font-weight:bold;">Nu poti vedea/edita administratori mai mici sau mai mari ca tine!</p>';
	}else if(isset($found) && $found==3){
		echo '<p style="color:#ff0000;font-weight:bold;">Trebuie sa fii admin!</p>';
	}else if(isset($_GET['player'])){
		echo '<p style="color:#ff0000;font-weight:bold;">Nu exista niciun jucator cu acel nume!</p>';
	}

	echo '<form action="admin_panel.php" method="GET">
		Cauta jucator:
		<input type="text" name="player" value="'.(isset($_GET['player']) ? htmlentities(stripslashes($_GET['player'])) : '').'" />
		<input type="submit" value="Cauta" />
	</form>';
	if($udata['AdminLevel'] >= 5)
		echo '<a href="manage_leaders.php"><img src="images/2.png"/></a>';

}
?>
<?php include 'includes/footer.php'; ?>