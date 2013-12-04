<?php

/**
 * Filename: MessageDAO.php (Data Access Object)
 * Message class for the Guestbook
 */
class MessageDAO {

    /**
     * @param Message object
     * @return Boolean is the message added to messages table or not
     */
    public static function createMessage($name,$email,$message) {
        // Execute SQL query to INSERT into messages table
        $query = "INSERT INTO tbmessages(name , email, message, date_posted, is_approved ) VALUES('$name', '$email', '$message', CURRENT_DATE, 'N')";
        $result = mysql_query($query);
    }

    public static function view_info($id) {
        // Execute SQL to fetch message based on ID
        $query = "SELECT is_approved FROM tbmessages WHERE id = '$id' ";
        $result = mysql_query($query);
        $row = mysql_fetch_assoc($result);
        return $row; 
    }


    /**
     * @return Array of Message objects
     */
    public static function getAllMessages() {
      $query = "SELECT * FROM tbmessages";
        $result = mysql_query($query);
        $list = array();
        if(mysql_num_rows($result)>0){            
            while($row = mysql_fetch_assoc($result)){
                    $list[] = $row;
            }   
        }
        return $list; 
    }

    /**
     * @param Integer ID number of message
     * @return Message object
     */
    public static function deleteMessage($id) {
        // Execute SQL to delete the message based on ID
        $query = "DELETE FROM tbmessages WHERE id = '$id' ";
        $result = mysql_query($query);
    }

    /**
     * Set is_approved to 'Y'
     * @param Integer id number
     * @return Boolean
     */
    public static function approveMessage($id) {
      $query = "UPDATE tbmessages SET is_approved = 'Y' WHERE id = '{$id}'";
      $result = mysql_query($query);
    }

    /**
     * Set is_approved to 'N'
     * @param Integer id number
     * @return Boolean
     */
    public static function rejectMessage($id) {
        $query = "UPDATE tbmessages SET is_approved = 'N' WHERE id = '{$id}' ";
        $result = mysql_query($query);
    }
     public static function view_approved(){
        // Execute SQL to view all approved messages
        $query = "SELECT * FROM tbmessages WHERE is_approved = 'Y' ";
        $result = mysql_query($query);
        $list = array();
        if(mysql_num_rows($result)>0){
            while($row = mysql_fetch_assoc($result)){
                $list[] = $row;
            }
        }
        return $list;

    }
}

?>
