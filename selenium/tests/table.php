<?php require('./config.inc.php') ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>New Test</title>
</head>
<body>
<table cellpadding="1" cellspacing="1" border="1">
<thead>
<tr><td rowspan="1" colspan="3">Create tables public.student, public.promo, public.test_to_drop and drop public.test_to_drop</td></tr>
</thead><tbody>
<?php include('login.php') ?>
<tr>
	<td>clickAndWait</td>
	<td>link=<?php echo $lang['strdatabases'] ?></td>
	<td></td>
</tr>
<tr>
	<td>clickAndWait</td>
	<td>link=<?php echo $testdb ?></td>
	<td></td>
</tr>
<tr>
	<td>clickAndWait</td>
	<td>link=<?php echo $lang['strschemas'] ?></td>
	<td></td>
</tr>
<tr>
	<td>clickAndWait</td>
	<td>link=public</td>
	<td></td>
</tr>
<tr>
	<td>clickAndWait</td>
	<td>link=<?php echo $lang['strtables'] ?></td>
	<td></td>
</tr>
<!-- student table -->
<tr>
	<td>clickAndWait</td>
	<td>link=<?php echo $lang['strcreatetable'] ?></td>
	<td></td>
</tr>
<tr>
	<td>type</td>
	<td>name</td>
	<td>student</td>
</tr>
<tr>
	<td>type</td>
	<td>fields</td>
	<td>5</td>
</tr>
<tr>
	<td>type</td>
	<td>tblcomment</td>
	<td>student table</td>
</tr>
<tr>
	<td>clickAndWait</td>
	<td>//input[@value='<?php echo $lang['strnext'] ?>']</td>
	<td></td>
</tr>
<tr>
	<td>type</td>
	<td>field[0]</td>
	<td>id</td>
</tr>
<tr>
	<td>select</td>
	<td>types0</td>
	<td>label=SERIAL</td>
</tr>
<tr>
	<td>click</td>
	<td>primarykey[0]</td>
	<td></td>
</tr>
<tr>
	<td>type</td>
	<td>field[1]</td>
	<td>id_promo</td>
</tr>
<tr>
	<td>select</td>
	<td>types1</td>
	<td>label=integer</td>
</tr>
<tr>
	<td>type</td>
	<td>field[2]</td>
	<td>name</td>
</tr>
<tr>
	<td>select</td>
	<td>types2</td>
	<td>label=character varying</td>
</tr>
<tr>
	<td>type</td>
	<td>lengths2</td>
	<td>20</td>
</tr>
<tr>
	<td>click</td>
	<td>notnull[2]</td>
	<td></td>
</tr>
<tr>
	<td>type</td>
	<td>field[3]</td>
	<td>birthday</td>
</tr>
<tr>
	<td>select</td>
	<td>types3</td>
	<td>label=date</td>
</tr>
<tr>
	<td>type</td>
	<td>field[4]</td>
	<td>resume</td>
</tr>
<tr>
	<td>select</td>
	<td>types4</td>
	<td>label=text</td>
</tr>
<tr>
	<td>clickAndWait</td>
	<td>//input[@value='Create']</td>
	<td></td>
</tr>
<tr>
	<td>assertText</td>
	<td>//p[@class='message']</td>
	<td><?php echo $lang['strtablecreated'] ?></td>
</tr>
<!-- promo table -->
<tr>
	<td>clickAndWait</td>
	<td>link=<?php echo $lang['strcreatetable'] ?></td>
	<td></td>
</tr>
<tr>
	<td>type</td>
	<td>name</td>
	<td>promo</td>
</tr>
<tr>
	<td>type</td>
	<td>fields</td>
	<td>3</td>
</tr>
<tr>
	<td>type</td>
	<td>tblcomment</td>
	<td>promotion's year & speciality</td>
</tr>
<tr>
	<td>clickAndWait</td>
	<td>//input[@value='Next &gt;']</td>
	<td></td>
</tr>
<tr>
	<td>type</td>
	<td>field[0]</td>
	<td>id</td>
</tr>
<tr>
	<td>select</td>
	<td>types0</td>
	<td>label=SERIAL</td>
</tr>
<tr>
	<td>click</td>
	<td>primarykey[0]</td>
	<td></td>
</tr>
<tr>
	<td>type</td>
	<td>field[1]</td>
	<td>spe</td>
</tr>
<tr>
	<td>select</td>
	<td>types1</td>
	<td>label=character varying</td>
</tr>
<tr>
	<td>type</td>
	<td>lengths1</td>
	<td>20</td>
</tr>
<tr>
	<td>click</td>
	<td>notnull[1]</td>
	<td></td>
</tr>
<tr>
	<td>type</td>
	<td>field[2]</td>
	<td>year</td>
</tr>
<tr>
	<td>select</td>
	<td>types2</td>
	<td>label=regexp:\"?year\"?</td><!-- 8.3 does not quote domains -->
</tr>
<tr>
	<td>click</td>
	<td>notnull[2]</td>
	<td></td>
</tr>
<tr>
	<td>clickAndWait</td>
	<td>//input[@value='Create']</td>
	<td></td>
</tr>
<tr>
	<td>assertText</td>
	<td>//p[@class='message']</td>
	<td><?php echo $lang['strtablecreated'] ?></td>
</tr>
<!-- create table like-->
<tr>
	<td>clickAndWait</td>
	<td>link=<?php echo $lang['strcreatetablelike'] ?></td>
	<td></td>
</tr>
<tr>
	<td>type</td>
	<td>name</td>
	<td>test_to_drop</td>
</tr>
<tr>
	<td>select</td>
	<td>like</td>
	<td>label=public.promo</td>
</tr>
<tr>
	<td>click</td>
	<td>withdefaults</td>
	<td></td>
</tr>
<tr>
	<td>clickAndWait</td>
	<td>//input[@value='Create']</td>
	<td></td>
</tr>
<tr>
	<td>assertText</td>
	<td>//p[@class='message']</td>
	<td><?php echo $lang['strtablecreated'] ?></td>
</tr>
<!-- drop table like-->
<tr>
	<td>clickAndWait</td>
	<td>//tr/td/a[text()='test_to_drop']/../../td/a[text()='<?php echo $lang['strdrop'] ?>']</td>
	<td></td>
</tr>
<tr>
	<td>click</td>
	<td>cascade</td>
	<td></td>
</tr>
<tr>
	<td>clickAndWait</td>
	<td>drop</td>
	<td></td>
</tr>
<tr>
	<td>assertText</td>
	<td>//p[@class='message']</td>
	<td><?php echo $lang['strtabledropped'] ?></td>
</tr>
<?php include('logout.php'); ?>
</tbody></table>
</body>
</html>