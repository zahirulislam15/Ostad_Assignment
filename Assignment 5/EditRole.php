<?php
class EditRole{
    
    public $role;
    public function __construct() {
        session_start();
        
        if (!isset($_SESSION['user'])) {
            header('Location: Login.php');
        }
        if (!isset($_SESSION['user']->role)) {
            $_SESSION['warning'] = 'You have no permission to access Role';
            header('Location: Home.php');
            exit;
        }
        if ((isset($_SESSION['user']->role) && $_SESSION['user']->role != 'Admin')) {
            $_SESSION['warning'] = 'You have no permission to access Role';
            header('Location: Home.php');
            exit;
        }
        $role = $this->get($_GET['uid']);
        $this->role =  $role;
    }

    function get($uid){
        if(isset($uid) && $uid != "") {
            $recoveredData = file_get_contents('./data/roles.json', T_CURLY_OPEN);
            $roleList = json_decode($recoveredData);
            foreach($roleList as $role){
                if($role->uid == $uid){
                    return $role;
                }
            }
            // return false;
        }
        
    }

    public function update($roleName) {
        if (trim($roleName) == "") {
            $_SESSION['warning'] = "Role name field is required";
            return false;
        }else{
            $validation = $this->validation($this->role->uid, $roleName);
            if ($validation === true) {
                $recoveredData = file_get_contents('./data/roles.json');
                $existingData = json_decode($recoveredData);
                $data= [];
                foreach ($existingData as $key => $role) {
                    $exist['id'] = $role->id;
                    $exist['uid'] = $role->uid;
                    $exist['role'] = $role->role;
                    $exist['permissions'] = $role->permissions;
                    if ($role->role == $this->role->role) {
                        $exist['role'] = $roleName;
                    }
                    $data[] = $exist;
                }
                
                $_SESSION['message'] = "Role successfully updated";
                file_put_contents('./data/roles.json', json_encode($data));
                header('Location: Role.php');
                exit;
            } else {
                return $validation;
            }
        }
    }

    function validation($uid,$roleName) {
        $recoveredData = file_get_contents('./data/roles.json', T_CURLY_OPEN);
        $roleList = json_decode($recoveredData);
        
        if (!empty($roleList)) {
            foreach ($roleList as $key => $role) {
                if ($role->role == $roleName && $role->uid != $uid) {
                    $_SESSION['warning'] = "This role already exist";
                    return false;
                }
            }
        }
        return true;
    }
}

$roleObj = new EditRole();
if(empty($roleObj->role)){
    $_SESSION['warning'] = "You UID is invalid";
    header('Location: Role.php');
    exit;
}
if (isset($_POST['submit'])) {
    $roles = $roleObj->update($_POST['name']);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Role Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>

<body class="">

    <div class="p-2 bg-primary text-white text-center">
        <h1>Role Management</h1>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark text-center">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="Home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Registration.php">Create New User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="Role.php"> Role List</a>
                </li>
                <?php 
                    $role = isset($_SESSION['user']->role)? $_SESSION['user']->role: "User";
                    ?>
                <li class="nav-item">
                    <a class="nav-link" href="Logout.php"> Logout | Welcome <?= $_SESSION['user']->name ." (".$role.")"?></a>
                </li>

                
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row ">
            <div class="mask d-flex align-items-center h-100 gradient-custom-3  ">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-8">
                            <?php 
                                if(isset($_SESSION["warning"])){     
                            ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Warning!</strong> <?= $_SESSION["warning"] ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php 
                                unset($_SESSION['warning']);
                                }
                            ?>
                            <h1>Edit Role
                                <a href="Role.php" class="btn btn-primary float-end">Role List</a>
                            </h1>
                            <hr>
                         <form method="post" action="">
                            <input type="hidden" name="id" value="<?= $roleObj->role->id ?>">
                            <div class="mb-3 col-md-4">
                                <label for="name" class="form-label">Role Name</label>
                                <input value="<?= $roleObj->role->role; ?>" type="text" name="name" class="form-control" id="name" required placeholder="Role Name">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="submit" class="btn btn-primary">Save</button>
                            </div>
                            
                            <div class="mb-3">
                            <?php 
                                if (!isset($_SESSION["user"])){
                                ?>
                                Have already an account?
                                <a href="Login.php" class="btn btn-secondary" class="btn btn-secondary" >Login</a>
                                <?php 
                                }
                                ?>
                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
    </div>

    <div class="mt-5 p-4 bg-dark text-white text-center">
        <p>Email: zairulislam15@gmail.com</p>
    </div>

</body>

</html>
