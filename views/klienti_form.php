<div class="content row">
    <!-- ------------ -->
    <!-- News Edit Info -->
    <!-- ------------ -->

    <div class="col-md-8 px-3 pb-2">
        <form method="post" name="editKlienti-form" enctype="multipart/form-data" >
            <div class="card row bg-secondary-subtle">
                <h5 class="card-header bg-secondary"><?php echo $client_title ?></h5>

                    <!-- first name / last name -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md">
                                <label for="firstName" class="col-form-label">Vārds</label>
                            </div>
                            <div class="col-md">
                                <input type="text" id="firstName" name="firstName" class="form-control" placeholder="vārds" value="<?php echo $klienti['firstName']; ?>" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="col-md">
                                <label for="lastName" class="col-form-label">Uzvārds</label>
                            </div>
                            <div class="col-md">
                                <input type="text " id="lastName" name="lastName" class="form-control " placeholder="uzvārds" value="<?php echo $klienti['lastName']; ?>" required>
                            </div>
                        </div>
                    </div>
                    
                    <!-- email / phone -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md">
                                <label for="email" class="col-form-label">E-pasts</label>
                            </div>
                            <div class="col-md">
                                <input type="text" id="email" name="email" class="form-control" placeholder="email" value="<?php echo $klienti['email']; ?>" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="col-md">
                                <label for="phone" class="col-form-label">Numurs</label>
                            </div>
                            <div class="col-md">
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="phone" value="<?php echo $klienti['phone']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <!-- occupation / date -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md">
                                <label for="occupation" class="col-form-label">Nodarbošanās</label>
                            </div>
                            <div class="col-md">
                                <input type="text" id="occupation" name="occupation" class="form-control" placeholder="occupation" value="<?php echo $klienti['occupation']; ?>" required>
                            </div>
                            
                        </div>

                        <div class="col-md-6">
                            <div class="col-md">
                                <label for="lastSentAdDate" class="col-form-label">Date</label>
                            </div>
                            <div class="col-md">
                                <input type="date" id="lastSentAdDate" name="lastSentAdDate" class="form-control" value="<?php echo $klients['lastSentAdDate']; ?>" required>
                            </div> 
                        </div>
                    </div>

                    <!-- description -->
                    <div>
                        <div class="col-md-6">
                            <label for="description" class="col-form-label">Description</label>
                        </div>
                        <div class="col-md-12 mb-2 p-2">
                        <textarea id="editor" name="description"><?php echo $klienti['description']; ?></textarea>
                        </div> 
                    </div>     
                    
                    <!-- Submit -->
                    <div class="col-md-12 p-3 text-end">
                        <a class="btn btn-danger" href="?klienti" role="button">Cancel</a>
                        <button type="submit"class="btn btn-primary"  name="submit-klientiEditForm">Submit</button>
                    </div>
            </div>
        </form>
    </div>
</div>

<script>

$(document).ready(function() {
    $('#editor').summernote()({
        tabsize: 2,
        height: 300
    });


  });

const addFileNameToLabel = file => {
    const fileName = file.target.files[0].name
    const customLabel = file.target.nextElementSibling
    customLabel.textContent = fileName
  }
  
  // Aply to each `.custom-file-label`
  document.querySelectorAll('input[type="file"]')
    .forEach(file => file.addEventListener('change', addFileNameToLabel))
</script>

    </script>