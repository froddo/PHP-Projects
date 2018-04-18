<?php
require ('core/init.php');

$topic = new Topic();
$topic_id = true;

//Get id from URL
if (isset($_GET['id'])){

    $topic_id = $_GET['id'];
}
if (isset($_POST['do_reply'])){
    $_SESSION['sec'] = $_POST['hidden'];

    $topic_id = $_POST['hidden'];
    $data = array();
    $data['topic_id'] = $_GET['id'];
    $data['body'] = $_POST['body'];
    $data['user_id'] = getUser()['user_id'];

    $validate = new Validator();

    $field_array = array('body');
    if ($validate->isRequired($field_array)){
        if ($topic->reply($data)){
            redirect('topic.php?id='.$topic_id, 'Your reply has been posted', 'success');
        } else {
            redirect('topic.php?id='.$topic_id, 'Something went wrong with your reply', 'error');
        }
    } else {
        redirect('topic.php?='.$topic_id, 'Your reply form is blank!', 'error');
    }
}

$template = new Template('templates/topicss.php');

$template->topic = $topic->getTopic((isset($_GET['id']) ? $topic_id : $_SESSION['sec']));
$template->replies = $topic->getReplies((isset($_GET['id']) ? $topic_id : $_SESSION['sec']));
$template->title = $topic->getTopic((isset($_GET['id']) ? $topic_id : $_SESSION['sec']))->title;

echo $template;