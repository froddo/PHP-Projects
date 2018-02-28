<?php
class ShareModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM shares ORDER BY create_date DESC');
		$rows = $this->resultSet();
		return $rows;
	}
	public function add(){
	    //Sanitize Post
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if ($post['submit']){
            if ($post['title'] == '' || $post['body'] == '' || $post['link'] == ''){
                Messages::setMsg('Please Fill In All Fields', 'error');
                return;
            }

            // Insert into mysql
            $this->query('INSERT INTO shares (title, body, link, user_name) VALUES (:title, :body, :link, :user_name)');
            $this->bind(':title', $post['title']);
            $this->bind(':body', $post['body']);
            $this->bind(':link', $post['link']);
            $this->bind(':user_name', $_SESSION['user_data']['name']);
            $this->execute();
            //Verify
            if ($this->lastInsertId()){
                //Redirect
                header('Location: '.ROOT_URL.'shares');
            }

        }
        return;
    }
}