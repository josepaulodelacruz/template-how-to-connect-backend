<?php

//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$test_upload = new testUpload();
$test_upload->read();

///This represent as your backenc
class TestUpload 
{

    /**
     * This function can be 
     * access at your localhost 
     * http://<localhost>/<fileName of the project>/api/test-upload/read.php
     * call this url to your front-end via javascript
     */
    public function read() {
        ///simulate of file upload
        echo json_encode(
            array(
                'result' => "You have successfuly uploaded a file",
                'status' => 200,
                'data' => array(
                    'file_name' => 'Your dummy file',
                    'is_copied' => 100,
                    ),
            ),
        );
    }

}