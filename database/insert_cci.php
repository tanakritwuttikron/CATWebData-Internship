<?php
if (!isset($_SESSION))
{
 session_start();
}

require 'db.php';
$id_edge = $_POST["id_edge"];

if ($_SESSION["status"]==="1") {
 $sql = "INSERT INTO ip_cci (id_edge,cci_ip)
 VALUES ('".$id_edge."','".$_POST["add_cci_ip"]."')";
$query = mysqli_query($conn,$sql);
header("Location: ../view/admin/ip_cci_admin.php?id_edge=".$id_edge."");

mysqli_close($conn);
}elseif ($_SESSION["status"]==="2") {
 $sql = "INSERT INTO ip_cci (id_edge,cci_ip)
 VALUES ('".$id_edge."','".$_POST["add_cci_ip"]."')";
$query = mysqli_query($conn,$sql);

$last_id = mysqli_insert_id($conn);

$sql = "INSERT INTO detail_cci (id_edge,id_cci,ip_num,cci_vlan,cci_subnet,cci_cat_id,cci_name)
 VALUES ('".$id_edge."','".$last_id."','1','-','-','-','-'),
 ('".$id_edge."','".$last_id."','2','-','-','-','-'),
 ('".$id_edge."','".$last_id."','3','-','-','-','-'),
 ('".$id_edge."','".$last_id."','4','-','-','-','-'),
 ('".$id_edge."','".$last_id."','5','-','-','-','-'),
 ('".$id_edge."','".$last_id."','6','-','-','-','-'),
 ('".$id_edge."','".$last_id."','7','-','-','-','-'),
 ('".$id_edge."','".$last_id."','8','-','-','-','-'),
 ('".$id_edge."','".$last_id."','9','-','-','-','-'),
 ('".$id_edge."','".$last_id."','10','-','-','-','-'),
 ('".$id_edge."','".$last_id."','11','-','-','-','-'),
 ('".$id_edge."','".$last_id."','12','-','-','-','-'),
 ('".$id_edge."','".$last_id."','13','-','-','-','-'),
 ('".$id_edge."','".$last_id."','14','-','-','-','-'),
 ('".$id_edge."','".$last_id."','15','-','-','-','-'),
 ('".$id_edge."','".$last_id."','16','-','-','-','-'),
 ('".$id_edge."','".$last_id."','17','-','-','-','-'),
 ('".$id_edge."','".$last_id."','18','-','-','-','-'),
 ('".$id_edge."','".$last_id."','19','-','-','-','-'),
 ('".$id_edge."','".$last_id."','20','-','-','-','-'),
 ('".$id_edge."','".$last_id."','21','-','-','-','-'),
 ('".$id_edge."','".$last_id."','22','-','-','-','-'),
 ('".$id_edge."','".$last_id."','23','-','-','-','-'),
 ('".$id_edge."','".$last_id."','24','-','-','-','-'),
 ('".$id_edge."','".$last_id."','25','-','-','-','-'),
 ('".$id_edge."','".$last_id."','26','-','-','-','-'),
 ('".$id_edge."','".$last_id."','27','-','-','-','-'),
 ('".$id_edge."','".$last_id."','28','-','-','-','-'),
 ('".$id_edge."','".$last_id."','29','-','-','-','-'),
 ('".$id_edge."','".$last_id."','30','-','-','-','-'),
 ('".$id_edge."','".$last_id."','31','-','-','-','-'),
 ('".$id_edge."','".$last_id."','32','-','-','-','-'),
 ('".$id_edge."','".$last_id."','33','-','-','-','-'),
 ('".$id_edge."','".$last_id."','34','-','-','-','-'),
 ('".$id_edge."','".$last_id."','35','-','-','-','-'),
 ('".$id_edge."','".$last_id."','36','-','-','-','-'),
 ('".$id_edge."','".$last_id."','37','-','-','-','-'),
 ('".$id_edge."','".$last_id."','38','-','-','-','-'),
 ('".$id_edge."','".$last_id."','39','-','-','-','-'),
 ('".$id_edge."','".$last_id."','40','-','-','-','-'),
 ('".$id_edge."','".$last_id."','41','-','-','-','-'),
 ('".$id_edge."','".$last_id."','42','-','-','-','-'),
 ('".$id_edge."','".$last_id."','43','-','-','-','-'),
 ('".$id_edge."','".$last_id."','44','-','-','-','-'),
 ('".$id_edge."','".$last_id."','45','-','-','-','-'),
 ('".$id_edge."','".$last_id."','46','-','-','-','-'),
 ('".$id_edge."','".$last_id."','47','-','-','-','-'),
 ('".$id_edge."','".$last_id."','48','-','-','-','-'),
 ('".$id_edge."','".$last_id."','49','-','-','-','-'),
 ('".$id_edge."','".$last_id."','50','-','-','-','-'),
 ('".$id_edge."','".$last_id."','51','-','-','-','-'),
 ('".$id_edge."','".$last_id."','52','-','-','-','-'),
 ('".$id_edge."','".$last_id."','53','-','-','-','-'),
 ('".$id_edge."','".$last_id."','54','-','-','-','-'),
 ('".$id_edge."','".$last_id."','55','-','-','-','-'),
 ('".$id_edge."','".$last_id."','56','-','-','-','-'),
 ('".$id_edge."','".$last_id."','57','-','-','-','-'),
 ('".$id_edge."','".$last_id."','58','-','-','-','-'),
 ('".$id_edge."','".$last_id."','59','-','-','-','-'),
 ('".$id_edge."','".$last_id."','60','-','-','-','-'),
 ('".$id_edge."','".$last_id."','61','-','-','-','-'),
 ('".$id_edge."','".$last_id."','62','-','-','-','-'),
 ('".$id_edge."','".$last_id."','63','-','-','-','-'),
 ('".$id_edge."','".$last_id."','64','-','-','-','-'),
 ('".$id_edge."','".$last_id."','65','-','-','-','-'),
 ('".$id_edge."','".$last_id."','66','-','-','-','-'),
 ('".$id_edge."','".$last_id."','67','-','-','-','-'),
 ('".$id_edge."','".$last_id."','68','-','-','-','-'),
 ('".$id_edge."','".$last_id."','69','-','-','-','-'),
 ('".$id_edge."','".$last_id."','70','-','-','-','-'),
 ('".$id_edge."','".$last_id."','71','-','-','-','-'),
 ('".$id_edge."','".$last_id."','72','-','-','-','-'),
 ('".$id_edge."','".$last_id."','73','-','-','-','-'),
 ('".$id_edge."','".$last_id."','74','-','-','-','-'),
 ('".$id_edge."','".$last_id."','75','-','-','-','-'),
 ('".$id_edge."','".$last_id."','76','-','-','-','-'),
 ('".$id_edge."','".$last_id."','77','-','-','-','-'),
 ('".$id_edge."','".$last_id."','78','-','-','-','-'),
 ('".$id_edge."','".$last_id."','79','-','-','-','-'),
 ('".$id_edge."','".$last_id."','80','-','-','-','-'),
 ('".$id_edge."','".$last_id."','81','-','-','-','-'),
 ('".$id_edge."','".$last_id."','82','-','-','-','-'),
 ('".$id_edge."','".$last_id."','83','-','-','-','-'),
 ('".$id_edge."','".$last_id."','84','-','-','-','-'),
 ('".$id_edge."','".$last_id."','85','-','-','-','-'),
 ('".$id_edge."','".$last_id."','86','-','-','-','-'),
 ('".$id_edge."','".$last_id."','87','-','-','-','-'),
 ('".$id_edge."','".$last_id."','88','-','-','-','-'),
 ('".$id_edge."','".$last_id."','89','-','-','-','-'),
 ('".$id_edge."','".$last_id."','90','-','-','-','-'),
 ('".$id_edge."','".$last_id."','91','-','-','-','-'),
 ('".$id_edge."','".$last_id."','92','-','-','-','-'),
 ('".$id_edge."','".$last_id."','93','-','-','-','-'),
 ('".$id_edge."','".$last_id."','94','-','-','-','-'),
 ('".$id_edge."','".$last_id."','95','-','-','-','-'),
 ('".$id_edge."','".$last_id."','96','-','-','-','-'),
 ('".$id_edge."','".$last_id."','97','-','-','-','-'),
 ('".$id_edge."','".$last_id."','98','-','-','-','-'),
 ('".$id_edge."','".$last_id."','99','-','-','-','-'),
 ('".$id_edge."','".$last_id."','100','-','-','-','-'),
 ('".$id_edge."','".$last_id."','101','-','-','-','-'),
 ('".$id_edge."','".$last_id."','102','-','-','-','-'),
 ('".$id_edge."','".$last_id."','103','-','-','-','-'),
 ('".$id_edge."','".$last_id."','104','-','-','-','-'),
 ('".$id_edge."','".$last_id."','105','-','-','-','-'),
 ('".$id_edge."','".$last_id."','106','-','-','-','-'),
 ('".$id_edge."','".$last_id."','107','-','-','-','-'),
 ('".$id_edge."','".$last_id."','108','-','-','-','-'),
 ('".$id_edge."','".$last_id."','109','-','-','-','-'),
 ('".$id_edge."','".$last_id."','110','-','-','-','-'),
 ('".$id_edge."','".$last_id."','111','-','-','-','-'),
 ('".$id_edge."','".$last_id."','112','-','-','-','-'),
 ('".$id_edge."','".$last_id."','113','-','-','-','-'),
 ('".$id_edge."','".$last_id."','114','-','-','-','-'),
 ('".$id_edge."','".$last_id."','115','-','-','-','-'),
 ('".$id_edge."','".$last_id."','116','-','-','-','-'),
 ('".$id_edge."','".$last_id."','117','-','-','-','-'),
 ('".$id_edge."','".$last_id."','118','-','-','-','-'),
 ('".$id_edge."','".$last_id."','119','-','-','-','-'),
 ('".$id_edge."','".$last_id."','120','-','-','-','-'),
 ('".$id_edge."','".$last_id."','121','-','-','-','-'),
 ('".$id_edge."','".$last_id."','122','-','-','-','-'),
 ('".$id_edge."','".$last_id."','123','-','-','-','-'),
 ('".$id_edge."','".$last_id."','124','-','-','-','-'),
 ('".$id_edge."','".$last_id."','125','-','-','-','-'),
 ('".$id_edge."','".$last_id."','126','-','-','-','-'),
 ('".$id_edge."','".$last_id."','127','-','-','-','-'),
 ('".$id_edge."','".$last_id."','128','-','-','-','-'),
 ('".$id_edge."','".$last_id."','129','-','-','-','-'),
 ('".$id_edge."','".$last_id."','130','-','-','-','-'),
 ('".$id_edge."','".$last_id."','131','-','-','-','-'),
 ('".$id_edge."','".$last_id."','132','-','-','-','-'),
 ('".$id_edge."','".$last_id."','133','-','-','-','-'),
 ('".$id_edge."','".$last_id."','134','-','-','-','-'),
 ('".$id_edge."','".$last_id."','135','-','-','-','-'),
 ('".$id_edge."','".$last_id."','136','-','-','-','-'),
 ('".$id_edge."','".$last_id."','137','-','-','-','-'),
 ('".$id_edge."','".$last_id."','138','-','-','-','-'),
 ('".$id_edge."','".$last_id."','139','-','-','-','-'),
 ('".$id_edge."','".$last_id."','130','-','-','-','-'),
 ('".$id_edge."','".$last_id."','141','-','-','-','-'),
 ('".$id_edge."','".$last_id."','142','-','-','-','-'),
 ('".$id_edge."','".$last_id."','143','-','-','-','-'),
 ('".$id_edge."','".$last_id."','144','-','-','-','-'),
 ('".$id_edge."','".$last_id."','145','-','-','-','-'),
 ('".$id_edge."','".$last_id."','146','-','-','-','-'),
 ('".$id_edge."','".$last_id."','147','-','-','-','-'),
 ('".$id_edge."','".$last_id."','148','-','-','-','-'),
 ('".$id_edge."','".$last_id."','149','-','-','-','-'),
 ('".$id_edge."','".$last_id."','150','-','-','-','-'),
 ('".$id_edge."','".$last_id."','151','-','-','-','-'),
 ('".$id_edge."','".$last_id."','152','-','-','-','-'),
 ('".$id_edge."','".$last_id."','153','-','-','-','-'),
 ('".$id_edge."','".$last_id."','154','-','-','-','-'),
 ('".$id_edge."','".$last_id."','155','-','-','-','-'),
 ('".$id_edge."','".$last_id."','156','-','-','-','-'),
 ('".$id_edge."','".$last_id."','157','-','-','-','-'),
 ('".$id_edge."','".$last_id."','158','-','-','-','-'),
 ('".$id_edge."','".$last_id."','159','-','-','-','-'),
 ('".$id_edge."','".$last_id."','160','-','-','-','-'),
 ('".$id_edge."','".$last_id."','161','-','-','-','-'),
 ('".$id_edge."','".$last_id."','162','-','-','-','-'),
 ('".$id_edge."','".$last_id."','163','-','-','-','-'),
 ('".$id_edge."','".$last_id."','164','-','-','-','-'),
 ('".$id_edge."','".$last_id."','165','-','-','-','-'),
 ('".$id_edge."','".$last_id."','166','-','-','-','-'),
 ('".$id_edge."','".$last_id."','167','-','-','-','-'),
 ('".$id_edge."','".$last_id."','168','-','-','-','-'),
 ('".$id_edge."','".$last_id."','169','-','-','-','-'),
 ('".$id_edge."','".$last_id."','170','-','-','-','-'),
 ('".$id_edge."','".$last_id."','171','-','-','-','-'),
 ('".$id_edge."','".$last_id."','172','-','-','-','-'),
 ('".$id_edge."','".$last_id."','173','-','-','-','-'),
 ('".$id_edge."','".$last_id."','174','-','-','-','-'),
 ('".$id_edge."','".$last_id."','175','-','-','-','-'),
 ('".$id_edge."','".$last_id."','176','-','-','-','-'),
 ('".$id_edge."','".$last_id."','177','-','-','-','-'),
 ('".$id_edge."','".$last_id."','178','-','-','-','-'),
 ('".$id_edge."','".$last_id."','179','-','-','-','-'),
 ('".$id_edge."','".$last_id."','180','-','-','-','-'),
 ('".$id_edge."','".$last_id."','181','-','-','-','-'),
 ('".$id_edge."','".$last_id."','182','-','-','-','-'),
 ('".$id_edge."','".$last_id."','183','-','-','-','-'),
 ('".$id_edge."','".$last_id."','184','-','-','-','-'),
 ('".$id_edge."','".$last_id."','185','-','-','-','-'),
 ('".$id_edge."','".$last_id."','186','-','-','-','-'),
 ('".$id_edge."','".$last_id."','187','-','-','-','-'),
 ('".$id_edge."','".$last_id."','188','-','-','-','-'),
 ('".$id_edge."','".$last_id."','189','-','-','-','-'),
 ('".$id_edge."','".$last_id."','190','-','-','-','-'),
 ('".$id_edge."','".$last_id."','191','-','-','-','-'),
 ('".$id_edge."','".$last_id."','192','-','-','-','-'),
 ('".$id_edge."','".$last_id."','193','-','-','-','-'),
 ('".$id_edge."','".$last_id."','194','-','-','-','-'),
 ('".$id_edge."','".$last_id."','195','-','-','-','-'),
 ('".$id_edge."','".$last_id."','196','-','-','-','-'),
 ('".$id_edge."','".$last_id."','197','-','-','-','-'),
 ('".$id_edge."','".$last_id."','198','-','-','-','-'),
 ('".$id_edge."','".$last_id."','199','-','-','-','-'),
 ('".$id_edge."','".$last_id."','200','-','-','-','-'),
 ('".$id_edge."','".$last_id."','201','-','-','-','-'),
 ('".$id_edge."','".$last_id."','202','-','-','-','-'),
 ('".$id_edge."','".$last_id."','203','-','-','-','-'),
 ('".$id_edge."','".$last_id."','204','-','-','-','-'),
 ('".$id_edge."','".$last_id."','205','-','-','-','-'),
 ('".$id_edge."','".$last_id."','206','-','-','-','-'),
 ('".$id_edge."','".$last_id."','207','-','-','-','-'),
 ('".$id_edge."','".$last_id."','208','-','-','-','-'),
 ('".$id_edge."','".$last_id."','209','-','-','-','-'),
 ('".$id_edge."','".$last_id."','210','-','-','-','-'),
 ('".$id_edge."','".$last_id."','211','-','-','-','-'),
 ('".$id_edge."','".$last_id."','212','-','-','-','-'),
 ('".$id_edge."','".$last_id."','213','-','-','-','-'),
 ('".$id_edge."','".$last_id."','214','-','-','-','-'),
 ('".$id_edge."','".$last_id."','215','-','-','-','-'),
 ('".$id_edge."','".$last_id."','216','-','-','-','-'),
 ('".$id_edge."','".$last_id."','217','-','-','-','-'),
 ('".$id_edge."','".$last_id."','218','-','-','-','-'),
 ('".$id_edge."','".$last_id."','219','-','-','-','-'),
 ('".$id_edge."','".$last_id."','220','-','-','-','-'),
 ('".$id_edge."','".$last_id."','221','-','-','-','-'),
 ('".$id_edge."','".$last_id."','222','-','-','-','-'),
 ('".$id_edge."','".$last_id."','223','-','-','-','-'),
 ('".$id_edge."','".$last_id."','224','-','-','-','-'),
 ('".$id_edge."','".$last_id."','225','-','-','-','-'),
 ('".$id_edge."','".$last_id."','226','-','-','-','-'),
 ('".$id_edge."','".$last_id."','227','-','-','-','-'),
 ('".$id_edge."','".$last_id."','228','-','-','-','-'),
 ('".$id_edge."','".$last_id."','229','-','-','-','-'),
 ('".$id_edge."','".$last_id."','230','-','-','-','-'),
 ('".$id_edge."','".$last_id."','231','-','-','-','-'),
 ('".$id_edge."','".$last_id."','232','-','-','-','-'),
 ('".$id_edge."','".$last_id."','233','-','-','-','-'),
 ('".$id_edge."','".$last_id."','234','-','-','-','-'),
 ('".$id_edge."','".$last_id."','235','-','-','-','-'),
 ('".$id_edge."','".$last_id."','236','-','-','-','-'),
 ('".$id_edge."','".$last_id."','237','-','-','-','-'),
 ('".$id_edge."','".$last_id."','238','-','-','-','-'),
 ('".$id_edge."','".$last_id."','239','-','-','-','-'),
 ('".$id_edge."','".$last_id."','240','-','-','-','-'),
 ('".$id_edge."','".$last_id."','241','-','-','-','-'),
 ('".$id_edge."','".$last_id."','242','-','-','-','-'),
 ('".$id_edge."','".$last_id."','243','-','-','-','-'),
 ('".$id_edge."','".$last_id."','244','-','-','-','-'),
 ('".$id_edge."','".$last_id."','245','-','-','-','-'),
 ('".$id_edge."','".$last_id."','246','-','-','-','-'),
 ('".$id_edge."','".$last_id."','247','-','-','-','-'),
 ('".$id_edge."','".$last_id."','248','-','-','-','-'),
 ('".$id_edge."','".$last_id."','249','-','-','-','-'),
 ('".$id_edge."','".$last_id."','250','-','-','-','-'),
 ('".$id_edge."','".$last_id."','251','-','-','-','-'),
 ('".$id_edge."','".$last_id."','252','-','-','-','-'),
 ('".$id_edge."','".$last_id."','253','-','-','-','-'),
 ('".$id_edge."','".$last_id."','254','-','-','-','-'),
 ('".$id_edge."','".$last_id."','255','-','-','-','-')";
 $query = mysqli_query($conn,$sql);
// echo $sql;
header("Location: ../view/user/ip_cci_user.php?id_edge=".$id_edge."");

mysqli_close($conn);
}
?>