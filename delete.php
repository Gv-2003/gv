<?php
    $response = array();

    function deleteShirt($id) {
        $conn = new mysqli('localhost', 'root', '', 'gvfashion');
        $result = $conn->query("DELETE FROM shirt WHERE id=$id");
        if ($result) {
            return ['success' => true];
        } else {
            return ['success' => false, 'message' => $conn->error];
        }
    }

    function deleteTShirt($id) {
        $conn = new mysqli('localhost', 'root', '', 'gvfashion');
        $result = $conn->query("DELETE FROM tshirt WHERE id=$id");
        if ($result) {
            return ['success' => true];
        } else {
            return ['success' => false, 'message' => $conn->error];
        }
    }

    function deletepent($id) {
        $conn = new mysqli('localhost', 'root', '', 'gvfashion');
        $result = $conn->query("DELETE FROM pent WHERE id=$id");
        if ($result) {
            return ['success' => true];
        } else {
            return ['success' => false, 'message' => $conn->error];
        }
    }

    function deleteuser($id) {
        $conn = new mysqli('localhost', 'root', '', 'gvfashion');
        $result = $conn->query("DELETE FROM users WHERE id=$id");
        if ($result) {
            return ['success' => true];
        } else {
            return ['success' => false, 'message' => $conn->error];
        }
    }

    function deletefeedback($id) {
        $conn = new mysqli('localhost', 'root', '', 'gvfashion');
        $result = $conn->query("DELETE FROM feedbacks WHERE id=$id");
        if ($result) {
            return ['success' => true];
        } else {
            return ['success' => false, 'message' => $conn->error];
        }
    }

    switch ($_POST['recordType']) {
        case "shirt":
            $response = deleteShirt($_POST['recordId']);
        break;

        case "t-shirt":
            $response = deleteTShirt($_POST['recordId']);
        break;
        
        case "pent":
            $response = deleteTShirt($_POST['recordId']);
        break;
        
        case "user":
            $response = deleteuser($_POST['recordId']);
        break;

        case "feedback":
            $response = deletefeedback($_POST['recordId']);
        break;

        default:
            $response['success'] = false;
    }
   echo json_encode($response);
?>