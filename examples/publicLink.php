<?phprequire "Dropbox.php";$db = new Dropbox('username', 'password');echo "Link Generated. Link available at : " . $db->publicLink('readme.txt');	//NOTE: ONLY CREATES VALID PUBLIC LINKS FOR FILES IN THE PUBLIC FOLDER!?>