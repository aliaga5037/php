<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" rel="stylesheet" href="css/materialize.css" media="screen,projection">
        <link rel="stylesheet" rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
        <form action="form.php" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="row main z-depth-3">
                    <form class="col s12">
                        <div class="row">
                            <div class="logo">
                                <h5>Order Service</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">perm_contact_calendar</i>
                                <input name="fullName" id="icon_telephone" type="text" class="validate">
                                <label for="icon_telephone">Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">business</i>
                                <input name="company" id="icon_telephone" type="text" class="validate">
                                <label for="icon_telephone">Company</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input name="email" id="icon_telephone" type="email" class="validate">
                                <label for="icon_telephone">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">phone</i>
                                <input name="phone" id="icon_telephone" type="tel" class="validate">
                                <label for="icon_telephone">Telephone</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <select multiple>
                                    <option value="" disabled selected>Interested in</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                                <label>Interest</label>
                            </div>
                            <div class="input-field col s6">
                                <select multiple>
                                    <option value="" disabled selected>Budget</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                                <label>Budget</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="date" class="datepicker" placeholder="start" name="start">
                            </div>
                            <div class="input-field col s6">
                                <input type="date" class="datepicker" placeholder="end" name="end">
                            </div>
                        </div>
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>File</span>
                                
                                <input type="file" accept="image/*"  onchange="showMyImage(this)" name="sekil" />
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" >
                            </div>
                        
                        <script> function showMyImage(fileInput) {
                        var files = fileInput.files;
                        for (var i = 0; i < files.length; i++) {
                        var file = files[i];
                        var imageType = /image.*/;
                        if (!file.type.match(imageType)) {
                        continue;
                        }
                        var img=document.getElementById("thumbnil");
                        img.file = file;
                        var reader = new FileReader();
                        reader.onload = (function(aImg) {
                        return function(e) {
                        aImg.src = e.target.result;
                        var myElement = document.querySelector("#thumbnil");
                        myElement.style.display = "block";
                        };
                        })(img);
                        reader.readAsDataURL(file);
                        }
                        }</script>
                        <img id="thumbnil" style="width:20%; margin-top:10px; display:none;"  src="" alt="image"/>
                    </div>
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="textarea1" class="materialize-textarea" name="txt"></textarea>
                                    <label for="textarea1">Message</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <button class="btn waves-effect waves-light right" type="submit" name="action">
                        SUBMIT REQUEST
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <script src="js/jquery-2.2.4.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/script.js"></script>
    
</body>
</html>