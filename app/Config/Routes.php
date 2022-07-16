<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
// $routes->setDefaultController('Home');
// $routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
// $routes->get('/', 'Student\HomeController::index');

// routes Hoai Nhan

$routes->post('signup', 'AuthenController::signup');
$routes->post('login', 'AuthenController::login');
$routes->get('/', 'AuthenController::index');
$routes->post('/student/scrollPage', 'Student\HomeController::fetch');
$routes->group('student', function ($routes) {
    $routes->get('home', 'Student\HomeController::index');
    $routes->get('discussion', 'Student\DiscussionController::index');
    $routes->get('bookmark', 'Student\BookmarkController::index');
    // $routes->get('account', 'Student\AccountController::index');
    $routes->get('startquiz', 'Student\QuizController::startQuiz');
    $routes->post('submitquiz', 'Student\QuizController::checkResult');
    $routes->get('result', 'Student\QuizController::showResult');
    $routes->post('getbookmark','Student\BookmarkController::getBookmarkedQuiz');
    $routes->post('bookmarkquiz','Student\BookmarkController::bookmarkQuiz');
    $routes->post('removebookmark','Student\BookmarkController::removeFromBookmark');
    $routes->get('searchquiz','Student\HomeController::searchQuiz');
});

// routes Tan Nga
$routes->post('/coach/scrollPage', 'Coach\QuizgeneratorController::fetch');
$routes->post('/coach/add', 'Coach\AddquestionController::addQuestion');
$routes->post('/coach/addquiz', 'Coach\QuizgeneratorController::add_quiz');

$routes->post('/question', 'Coach\QuestionbankController::fetch_c');
$routes->post('/previewquiz', 'Coach\AddquestionController::previewQuiz');
$routes->post('/coach/add__quiz', 'Coach\QuizgeneratorController::add__quiz');
$routes->post('/coach/update', 'Coach\AddquestionController::updateQuestion');
$routes->post('/coach/updatequiz', 'Coach\AddquestionController::updateQuiz');
$routes->post('/search', 'Coach\QuestionbankController::fetch_s');
$routes->post('/question1', 'Coach\QuestionbankController::fetch_d');
$routes->post('/tag', 'Coach\QuestionbankController::fetch_t');
$routes->post('/coach/filter', 'Coach\QuestionbankController::fetch_filter');

$routes->group('coach', function ($routes) {
    // $routes->get('home', 'Coach\HomeController::index');
    $routes->get('home', 'Coach\QuestionbankController::index');
    $routes->get('bank', 'Coach\QuestionbankController::index');
    $routes->get('quizgenerator', 'Coach\QuizgeneratorController::index');
    $routes->get('prequiz', 'Coach\QuizgeneratorController::preQuiz');
    $routes->get('addquestion', 'Coach\AddquestionController::index');
    $routes->get('addquiz', 'Coach\QuizgeneratorController::addquiz');
    $routes->get('editquiz', 'Coach\QuizgeneratorController::editquiz');
    $routes->get('editQuiz', 'Coach\AddquestionController::editQuiz');
    $routes->get('personal', 'Coach\PersonalController::index');
    $routes->get('editquestion', 'Coach\AddquestionController::edit');
    $routes->get('edit', 'Coach\AddquestionController::editQuestion');
    $routes->get('delete', 'Coach\AddquestionController::deleteQuestion');
    $routes->get('delete', 'Coach\AddquestionController::deleteQuestion');
    $routes->get('deleteQuiz', 'Coach\AddquestionController::deleteQuiz');
    // $routes->post('question', 'Coach\QuestionbankController::fetch_c');
});
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
