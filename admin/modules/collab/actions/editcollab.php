
<?php 
	include_once(DAO_PATH. "/UserDAO.class.php" );
?>
<!-- Start: page-top-outer -->
<!-- <div id="page-top-outer">


</div> -->
<!-- End: page-top-outer -->

<?php
$usr = new UserDAO;
$arrValues=$usr->getUserInfo($_GET['id']);
foreach ($arrValues as $row){
?>

<div class="clear">&nbsp;</div>

<!-- start content-outer -->
<div id="content-outer">
    <!-- start content -->
    <div id="content">
        <div id="page-heading"><h1>Modifier Collaborateur</h1></div>
            <div id="container">

                <div style="float: left;" class="loader"><img src="images/ajax-loader.gif" alt="Loading..." title="Loading..." id="loading" style="display:none" /></div><div style="float: left; margin-left:5px;" id="info"><p>Veuillez remplir le formulaire pour l'ajout d'un Collaborateur ..</p><br /></div>
                <div class="clear">&nbsp;</div>
                <img src="images/arrow-right.jpg" alt="Add This" title="Add This .." id="arrow-right" style="float:right;float: right; display: none; margin: 15px 50px 0 0;" />
                <a href="index.php?module=collab&option=add" class="addnew" id="addnew" style="display: none;">Ajouter un autre Collaborateur</a>
                <!-- start id-form -->
                    <form id="add-collab" action="./admin/modules/collab/actions/addcollab.php" method="POST">
                        <fieldset style="float: left; padding: 10px 10px 0 10px;">
                            <legend style="color: red;">Account Information</legend>
                            <table border="0" cellpadding="" cellspacing="" class="id-form">
                                <tbody>
                                    <tr>
                                        <th valign="top">Login :</th>
                                        <td><input name="login" type="text" value="<?php echo $row["login"]?>" required="required" /></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th valign="top">Password :</th>
                                        <td><input name="pwd1" type="password" value="<?php echo $row["pwd"]?>" required="required" /></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th valign="top">Retype Password :</th>
                                        <td><input name="pwd2" type="password" value="<?php echo $row["pwd"]?>" required="required" /></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th valign="top">E-Mail :</th>
                                        <td><input name="email" type="email" value="<?php echo $row["email"]?>" required="required" /></td>
                                    </tr>
                                    <tr>
                                        <th valign="top">Service :</th>
                                        <td><input name="id-service" type="text" value="<?php echo $row["id_service"]?>" required="required" /></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th valign="top">Account State :</th>
                                        
                                        
                                        <td><div style="float: left;">
													
												<input name="state" type="radio" value="1" id="active_acc" required="required" <?php if($row["active"]=='1'){?>checked<?php }?> />&nbsp; <label class="radio-label" for="active_acc"><b>Active</b></label>
												</div>
											<div style="float:left; margin-left: 20px;">
												<input name="state" type="radio" value="0" required="required" id="inactive_acc"<?php if($row["active"]=='0'){?>checked<?php }?> />&nbsp <label class="radio-label" for="inactive_acc"><b>Inactive</b></label>
											</div>											
											
										</td>
                                        
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                         </fieldset>
                        <fieldset style="float: right; padding: 10px 10px 0 10px;" class="sectionwrap">
                            <legend style="color: red">Contact Information</legend>
                            <table border="0" cellpadding="" cellspacing="" class="id-form">
                                <tbody>
                                    <tr>
                                        <th valign="top">Nom :</th>
                                        <td><input name="nom" value="<?php echo $row["nom_user"]?>" type="text" required="required" /></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th valign="top">Prenom :</th>
                                        <td><input name="prenom" type="text" value="<?php echo $row["prenom_user"]?>"  required="required"/></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th valign="top">Genre :</th>
                                        <td><div style="float: left;"><input name="genre" type="radio" value="Homme" required="required" id="male-gender" <?php if($row["genre"]=='homme'){?>checked<?php }?>/>&nbsp; <label class="radio-label" for="male-gender"><b>Homme</b></label></div><div style="float:left; margin-left: 20px;"><input name="genre" type="radio" value="Femme" required="required" id="femal-gender" <?php if($row["genre"]=='femme'){?>checked<?php }?> />&nbsp <label class="radio-label" for="femal-gender"><b>Femme</b></label></div></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th valign="top">Date de naissance :</th>
                                        <td><input name="date_naiss" type="date" value="<?php echo $row["date_naiss"]?>"  required="required"/></td>
                                    </tr>
                                    <tr>
                                        <th valign="top">Etat Civil :</th>
                                        <td><input name="etat_civil" type="text" value="<?php echo $row["etat_civil"]?>" required="required" /></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th valign="top">Adresse :</th>
                                        <td><textarea name ="adresse" rows="3" cols="" value="<?php echo $row["adresse"]?>" class="form-textarea" required="required"></textarea></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th valign="top">N° Telephone :</th>
                                        <td><input name="ntel" type="tel" value="<?php echo $row["tel_mobile"]?>" required="required" /></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th valign="top">Diplôme :</th>
                                        <td><input name="diplome" type="text" value="<?php echo $row["diplome"]?>" required="required" /></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                         </fieldset>
                        <fieldset style="width: 337px; padding: 10px 10px 0 10px;" class="sectionwrap">
                            <legend style="color: red">Professional Information</legend>
                            <table border="0" cellpadding="" cellspacing="" class="id-form">
                                <tbody>
                                    <tr>
                                        <th valign="top">Année du Diplôme :</th>
                                        <td><input name="annee_dip" value="<?php echo $row["annee_dip"]?>" type="date" required="required" /></td>
                                        <td></td>
                                    </tr>
                                    <!-- <tr>
                                        <th valign="top">Hire Date :</th>
                                        <td><input name="hire" type="date" required="required" /></td>
                                        <td></td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </fieldset>
                        <?php }?>
                        <input type="hidden" name="privilege" value="2" />
                        <input type="submit" style="float: right; margin: 35px 50px 0px 15px; width: 100px;color: green;font-weight: bold;cursor: pointer;" value="Modifier" />
                        <input type="reset" value="" style="float: right; margin: 34px 0 0 0;" id="reset" class="form-reset" />
                    </form>
                <!-- end id-form  -->
                <div class="clear">&nbsp;</div>
            </div>
        </div>
        <!--  end content -->
        <div class="clear">&nbsp;</div>
</div>
<script type="text/javascript">
$('#add-collab').submit(function(){
//$('#reset').click(function(){
        $("#info").fadeOut("fast", function(){$("#info").text("Processing ...")}).fadeIn("slow");
	$("#add-collab").fadeOut("fast", function(){$("#loading").fadeIn("normal");});
        $("#content-outer").height($("#sidebar").height());
        var collab = new Array(
                    $("input[name=login]").val(),
                    $("input[name=pwd1]").val(),
                    $("input[name=pwd2]").val(),
                    $("input[name=email]").val(),
                    $("input[name=id-service]").val(),
                    $("input[name=state]:checked").val(),
                    $("input[name=nom]").val(),
                    $("input[name=prenom]").val(),
                    $("input[name=genre]:checked").val(),
                    $("input[name=date_naiss]").val(),
                    $("input[name=etat_civil]").val(),
                    $("input[name=adresse]").val(),
                    $("input[name=ntel]").val(),
                    $("input[name=diplome]").val(),
                    $("input[name=annee_dip]").val()
                );
    var dataString = 'login='+ collab[0]
                     + '&pwd1=' + collab[1]
                     + '&pwd2=' + collab[2]
                     + '&email=' + collab[3]
                     + '&id-service=' + collab[4]
                     + '&state=' + collab[5]
                     + '&nom=' + collab[6]
                     + '&prenom=' + collab[7]
                     + '&genre=' + collab[8]
                     + '&date_naiss=' + collab[9]
                     + '&etat_civil=' + collab[10]
                     + '&adresse=' + collab[11]
                     + '&tel_mobile=' + collab[12]
                     + '&diplome=' + collab[13]
                     + '&annee_dip=' + collab[14]
                     ;

	$.ajax({
		type: "POST",
		url: "admin/modules/collab/actions/addcollab.php",
		data: dataString,
		cache: false,
		success: function (a) {
			if (a == 1) {
                                $("#loading").hide();
                                $("#info").fadeOut("fast", function(){$("#info").html("<p style=\"color: green;\">Un nouveau compte Collaborateur vient d'etre ajouté.</p>")}).fadeIn("normal", function(){$("#addnew").fadeIn("slow");$("#arrow-right").fadeIn("slow");});
			} else {
				$("#loading").hide();
                                $("#info").fadeOut("fast", function(){$("#info").html("<p style=\"color: red;\">Une erreure est survenue !</p>")}).fadeIn("normal");
			}
		}
	});
});
</script>
<script type="text/javascript">
$('#form').submit(function(){

    $.ajax({
      type: "POST",
      url: "",
      data: dataString,
      success: function(data) {
        $("#display").html(data).hide();
	$('#display').fadeIn("slow");
        var script = document.createElement("script");
        script.type = "text/javascript";
        script.src = "js/login_submit.js";
        $("head").append(script);
      }
    });
    return false;
});
</script>
