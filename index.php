 <?php
    require_once __DIR__ . './vendor/autoload.php';
    
    use MyApp\controllers\User as UserController;
    use MyApp\models\User as UserModel;
    use MyApp\routers\User as UserRouter;

    $userController = new UserController();
    $userModel = new UserModel();
    $userRouter = new UserRouter();

    var_dump($userController);
    var_dump($userModel);
    var_dump($userRouter);
    