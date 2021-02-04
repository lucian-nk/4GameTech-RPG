<?php
include 'includes/config.php';
redirect_not_logged();
if(isset($_POST['take_recover'])){
	
	$x = file_get_contents('http://vks16299.ip-176-31-170.eu/samp/rg_recover.php?u='.$_POST['username'].'&p='.$_POST['password']);

	$x = json_decode($x, true);
	
	$columns = array(
		'PlayerLevel',
		'AdminLevel',
		'Wipe',
		'DonateRank',
		'UpgradePoints',
		'ConnectedTime',
		'Registered',
		'Sex',
		'Age',
		'Origin',
		'CK',
		'Muted',
		'MuteTime',
		'Respect',
		'Money',
		'Bank',
		'Crimes',
		'Kills',
		'Deaths',
		'Arrested',
		'WantedLevel',
		'WantedPoints',
		'WantedDeaths',
		'Phonebook',
		'LottoNr',
		'Fishes',
		'BiggestFish',
		'Sticle',
		'Job',
		'Paycheck',
		'HeadValue',
		'Jailed',
		'JailTime',
		'Materials',
		'Drugs',
		'Leader',
		'Member',
		'FMember',
		'Rank',
		'Chara',
		'ContractTime',
		'DetSkill',
		'SexSkill',
		'BoxSkill',
		'LawSkill',
		'MechSkill',
		'JackSkill',
		'CarSkill',
		'NewsSkill',
		'DrugsSkill',
		'CookSkill',
		'FishSkill',
		'RromSkill',
		'Passport',
		'Inte',
		'Local',
		'Team',
		'Model',
		'PhoneNr',
		'House',
		'Car',
		'Bizz',
		'CarLic',
		'PunctePen',
		'FlyLic',
		'BoatLic',
		'FishLic',
		'GunLic',
		'MatsLic',
		'Gun1',
		'Gun2',
		'Gun3',
		'Gun4',
		'Gun5',
		'Gun6',
		'Ammo1',
		'Ammo2',
		'Ammo3',
		'Ammo4',
		'Ammo5',
		'Ammo6',
		'CarTime',
		'CGunoiTime',
		'PayDay',
		'PayDayHad',
		'CDPlayer',
		'Watch',
		'Frec',
		'Walkie',
		'Cigars',
		'Matches',
		'FTools',
		'Wins',
		'Loses',
		'AlcoholPerk',
		'DrugPerk',
		'MiserPerk',
		'PainPerk',
		'TraderPerk',
		'Tutorial',
		'Mission',
		'Warnings',
		'FWarns',
		'Fpunish',
		'Adjustable',
		'Fuel',
		'Married',
		'RequestingBackup',
		'Alawyer',
		'Limba',
		'RobSkill',
		'Tow',
		'Sf',
		'SpawnChange',
		'Rob',
		'Locked',
		'Car2',
		'Car3',
		'Imprumut',
		'ImpPayDay',
		'Agent',
		'Alowed',
		'Frate',
		'Updates08',
		'Updates09',
		'Updates10',
		'Updates11',
		'Updates12',
		'Updates13',
		'Updates14',
		'Updates15',
		'MarriedTo',
		'DateReg',
		'UltLog',
		'Email',
		'Status',
		'rpgon',
		'Allow',
	);

	if($x['status'] == 'success'){
		$query = mysql_query('SELECT uid FROM players_recovered WHERE uid='.$udata['id']);
		if(mysql_num_rows($query) == 0){
			$x =& $x['data'];
			mysql_query('INSERT INTO players_recovered(uid) VALUES('.$udata['id'].')');

			$update_array = array();
			foreach($columns as $column){
				if(isset($x[$column])){
					$update_array[] = "`$column`='".mysql_real_escape_string($x[$column])."'";
				}
			}
			
			mysql_query("UPDATE players SET ".implode(',', $update_array).' WHERE id='.$udata['id']);
		}

		echo json_encode(array(
			'status'=>'success'
		));
	}else{
		echo json_encode(array(
			'status'=>'failure'
		));
	}
	die();
}
include 'includes/header.php';
?>
	<h1>Recover account</h1>
	<?php
	$query = mysql_query('SELECT uid FROM players_recovered WHERE uid='.$udata['id']);
	if(mysql_num_rows($query) > 0){
		echo '<p>Contul este la zi</p>';
	}else{
	?>
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" id="username" /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" id="password" /></td>
		</tr>
		<tr>
			<td colspan="2"><input type="button" value="Recover" id="btn_recover" /></td>
		</tr>
	</table>
	
	<script type="text/javascript">
	var btn_recover = $('#btn_recover');
	btn_recover.click(function(){
		btn_recover.attr('disabled', 'disabled');
		btn_recover.val('In curs de recuperare');
		var pData = {
			username:$('#username').val(),
			password:$('#password').val(),
			take_recover:1
		};
		$.post('recover_account.php', pData, function(data){
			btn_recover.removeAttr('disabled');
			btn_recover.val('Recover');
			if(typeof(data.status) != 'undefined' && data.status == 'success'){
				window.location.reload();
			}else{
				alert('Username sau parola gresite');
			}
		}, 'json');
	});
	</script>
	<?php } ?>
	
<?php
include 'includes/footer.php';
?>
