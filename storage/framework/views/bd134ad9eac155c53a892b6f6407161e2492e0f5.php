<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Jquery Todo App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="favicon.jpg" type="image/jpg" sizes="16x16">

    <!--[htmlclean-protect]-->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <!--[/htmlclean-protect]-->

    <!--[htmlclean-protect]-->
    <!-- inject:js -->
    <script defer src="js/lib/fontawesome-all.min.js"></script>
    <!-- endinject -->
    <!--[/htmlclean-protect]-->

</head>
<body class="bg-primary">
<header class="container text-white"><h4 class="py-2">Jquery Todo List</h4></header>
<main class="page bg-white" id="petratings">
    <div class=" todos-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div id="main-app">

                        <div class="add-todo-item card textcenter mt-3">
                            <div class="todo-addheading card-header bg-primary text-white">
                                <i class="fas fa-plus"></i> Add Todo Item
                            </div>

                            <div class="card-body">

                                <form id="todoForm">

                                    <div class="form-group form-row">
                                        <label class="col-md-2 col-form-label text-md-right" for="todoTitle">Title</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="todoTitle" id="todoTitle"
                                                   placeholder="Todo Title">
                                        </div>
                                    </div>

                                    <div class="form-group form-row">
                                        <label class="col-md-2 col-form-label text-md-right"
                                               for="todoOwner">Owner</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control"
                                                   id="todoOwner" placeholder="Owner's Name">
                                        </div>
                                    </div>


                                    <div class="form-group form-row">
                                        <label class="col-md-2 text-md-right" for="todoDescription">Notes</label>
                                        <div class="col-md-10">
                                        <textarea class="form-control" rows="4" cols="50" name="todoDescription"
                                                  id="todoDescription" placeholder="Description"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group form-row mb-0">
                                        <div class="offset-md-2 col-md-10">
                                            <button type="submit" class="btn btn-primary d-block ml-auto">Add Todo Item
                                            </button>
                                        </div>
                                    </div>

                                </form>
                            </div>


                        </div>


                        <div class="info">click on title, owner or description to edit them</div>

                        <div id="todoList" class="todo-list item-list mb-3">

                        </div>

                    </div>


                </div>
            </div>

        </div>
    </div>
</main>
<footer class="container d-flex text-white py-2">
    <p>&copy; 2018 <a href="#">WebNinjaNS</a></p>
</footer>



<!-- Modal -->
<div id="update_task_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <form id="todoFormUpdate">

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="todoTitle">Title</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control todoTitle" name="todoTitle"  placeholder="Todo Title">
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="todoOwner">Owner</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control  todoOwner" placeholder="Owner's Name">
                        </div>
                    </div>


                    <div class="form-group form-row">
                        <label class="col-md-2 text-md-right" for="todoDescription">Notes</label>
                        <div class="col-md-10">
                            <textarea class="form-control description" rows="4" cols="50" name="todoDescription" placeholder="Description"></textarea>
                        </div>
                    </div>

                    <div class="form-group form-row mb-0">
                        <div class="offset-md-2 col-md-10">
                            <button type="submit" id="btn-update-task" class="btn btn-primary d-block ml-auto">Add Todo Item
                            </button>
                        </div>
                    </div>

                </form>
            </div>
            
                
            
        </div>

    </div>
</div>

<!--[htmlclean-protect]-->
<!-- inject:js -->
<script src="js/lib/jquery.min.js"></script>
<script src="js/lib/jquery.loadTemplate.min.js"></script>
<script src="js/lib/jquery-dateFormat.min.js"></script>
<script src="js/lib/popper.min.js"></script>
<script src="js/lib//bootstrap.min.js"></script>
<script src="js/lib/underscore-min.js"></script>
<script src="js/script.js"></script>
<!-- endinject -->
<!--[/htmlclean-protect]-->
</body>
</html>
    <?php /**PATH /Users/omar/todo_std/resources/views/index.blade.php ENDPATH**/ ?>