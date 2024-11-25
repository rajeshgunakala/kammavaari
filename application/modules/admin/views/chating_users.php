<style>
/* (Same as before) */
<style>

/* (Same as before) */
.chat-main-container {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

#container {
    /* display: flex;
    max-width: 1000px;
    margin: 20px auto;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    overflow: hidden;
    margin-top: 140px;
    margin-right: 100px; */

    display: flex;
    max-width: 90%;
    margin: 20px auto;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    overflow: hidden;
    /* margin-top: 7%;
    margin-left: 17%; */
}

.chat-message.right {
    text-align: right;
    /* background-color: #a6e7ff; Background color for admin messages */
    border-radius: 10px;
    /* Rounded corners for admin messages */
    padding: 10px;
    /* Padding for admin messages */
}

.chat-message.left {
    text-align: left;
    /* background-color: #e0f7cc;   */
    border-radius: 10px;
    /* Rounded corners for user messages */
    padding: 10px;
    /* Padding for user messages */
}

.chat-message.right {
    text-align: right;
}

.chat-message.left {
    text-align: left;
}

.message-content {
    display: inline-block;
    background-color: #a6e7ff;
    /* Background color for admin messages */
    border-radius: 10px;
    /* Rounded corners for admin messages */
    padding: 10px;
    /* Padding for admin messages */
}

#user-list {
    flex: 1;
    width: 300px;
    border-right: 1px solid #ccc;
    overflow-y: auto;
    border: 3px solid #ccc;

    /* flex: 1;
    width: 400px; 
    overflow-y: auto;
    border: 3px solid #ccc; */
}


#chat-window {
    flex: 3;
    display: flex;
    flex-direction: column;
}

#user-list,
#chat-window {
    height: 700px;
    border: 1px solid black;
    border-radius: 10px;
}

.user {
    padding: 10px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.user:hover {
    background-color: #e0e0e0;
}

.chat-messages-container {
    flex: 1;
    overflow-y: auto;
    padding: 20px;
}

.chat-message {
    margin-bottom: 10px;
}

.sender {
    font-weight: bold;
}

.timestamp {
    font-size: 0.8em;
    color: #888;
}

.hidden {
    display: none;
}

.user {
    padding: 10px;
    cursor: pointer;
    transition: background-color 0.3s;
    display: flex;
    align-items: center;
    /* Center items vertically */
}

.user img {
    width: 30px;
    /* Adjust the width of the image */
    height: 30px;
    /* Adjust the height of the image */
    border-radius: 50%;
    /* Make the image round */
    margin-right: 10px;
    /* Add spacing between the image and the name */
}

.user span {
    flex: 1;
    /* Allow the name to take up remaining space */
}

.user:hover {
    background-color: #e0e0e0;
}

.gradient1 {
    background-image: linear-gradient(to right top, #ff6b6b, #ff8778, #ffa087, #ffc496, #ffe3a6);
}

.gradient2 {
    background-image: linear-gradient(to right top, #63a4ff, #7aabe7, #92b2ce, #aab9b6, #c2cfc0);
}

.gradient3 {
    background-image: linear-gradient(to right top, #ffe166, #fdd877, #fbc988, #f9ba99, #f7acaa);
}

#message-input-container {
    display: flex;
    margin-top: auto;
    /* Push to the bottom of the flex container */
    padding: 20px;
}

#message-input {
    flex: 1;
    /* Take up remaining space */
    margin-right: 10px;
    border: 1px solid lightskyblue;
    border-radius: 20px;
}

.blue-button {
    background-color: lightskyblue;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* Additional styles for message alignment */
.chat-message.right {
    text-align: right;
}

.chat-message.left {
    text-align: left;
}

.header-container {
    background-color: black;
    color: white;
    padding: 10px;
    position: sticky;
    top: 0;
}

.header-container h1 {
    margin: 0;
}
#chat-header {
    position: sticky;
    top: 0;
    background-color: #333; 
    color: white;
    padding: 10px;
    z-index: 100; 
    height:45px;
}


/* Add this to your existing styles */
.online-status {
    font-size: 10px;
    /* Adjust the font size as needed */
    color: red;
    /* Set the color for online status */
    margin-top: 2px;
    /* Adjust the margin as needed */
}

</style>

<div class='chat-main-container new-side-content'>
    <div id="container">
        <!-- User List -->
        <div id="user-list">
            <div class="header-container">
                <!-- <h1>Users List</h1> -->
                <input type="text" id="user-search" placeholder="Search users..." oninput="searchUsers()">
            </div>
            <?php foreach ($users as $user):  
                 $online_status = Chat_users::getTimeago2(strtotime($user["last_activity"]),$user['online']);		
                 ?>
            <!-- Inside the loop where you display users -->
            <div class="user" onclick="openChat('<?php echo $user['id'] ?>')">
                <?php if ($user['applicationphotopath'] != ''): ?>
                <img src="<?php echo $user['applicationphotopath']; ?>" alt="User Image">
                <?php elseif ($user['gender'] == 'male'): ?>
                <img src="<?php echo site_url();?>images/boy.png" class="profileImg"
                    alt="<?php echo $user['first_name'];?>">
                <?php else: ?>
                <img src="<?php echo site_url();?>images/female.jpg" class="profileImg"
                    alt="<?php echo $user['first_name'];?>">
                <?php endif; ?>
                <span  style="font-size: 12px;"><?php echo $user['first_name']; ?></span>
                <?php if(!empty($user["last_activity"])){ ?>
                    <p class="online-status"><?php echo $online_status; ?></p>&nbsp;&nbsp;
               <?php } ?>

               <?php if($user['unread'] > 0): ?>
    <span class="unread-count" style="display:flex; background-color: red; color: white; border-radius: 100%; width: 0px; padding: 8px; text-align: center; line-height: 1px; font-size:13px;max-width:10px;text-align:center;marign:6px;0px;justify-content:center"><?php echo $user['unread']; ?></span> 
<?php endif; ?>

            </div>

            <?php endforeach; ?>
            <!-- Add more users as needed -->
        </div>

        <!-- Chat Window -->
        <div id="chat-window" class="hidden">
            <div id="chat-header"></div>
            <div class="chat-messages-container" id="chat-messages"></div>
            <!-- Input field and send button for typing and sending messages -->
            <div id="message-input-container">
                <input hidden id="user_iid" name="user_iid" value="">
                <input type="text" id="message-input" placeholder="Type your message...">
                <button class="blue-button" onclick="sendMessage()">Send</button>
            </div>
        </div>

        <script>
        function openChat(userId) {
            // Set the chat header to the selected user
            // document.getElementById('chat-header').innerText = 'Chat with User ' + userId;
            let rm_id = <?php echo ($this->session->userdata('user_id')) ?>;
            if (userId != '' && userId != null) {
                document.getElementById('user_iid').value = userId;

                // Getting admin sent messages
                let admin_replies = '';
                let user_cmpts = '';
                let user_da ='';
                $.get("<?php echo site_url()?>admin/Chat_users/get_chat_list/" + userId + "/" + rm_id,
                    function(result) {
                        var jsn = JSON.parse(result);
                        admin_replies = jsn.adm_msg;
                        user_cmpts = jsn.user_msg;
                        user_da = jsn.user_data[0];
                        //  console.log(user_da);
                         document.getElementById('chat-header').innerText = `Chat with ${user_da.first_name} (ID: ${user_da.profile_id})`;
                        displayMessages(admin_replies, user_cmpts);
                    }
                );
                $.get("<?php echo site_url()?>admin/Chat_users/update_message/" + userId + "/" + rm_id,
                    function(result) {
                        var jsn = JSON.parse(result);
                        if (jsn.res == true) {
                            console.log("Message updated");
                        } else {
                            console.log("Failed to update message");
                        }
                    }
                );
            }

            // Show the chat window
            document.getElementById('chat-window').classList.remove('hidden');
        }

        function displayMessages(adminReplies, userComplaints) {
            var chatMessagesDiv = document.getElementById('chat-messages');
            chatMessagesDiv.innerHTML = ''; // Clear previous messages

            // Combine admin replies and user complaints into a unified array
            var allMessages = adminReplies.map(function(msg) {
                return {
                    text: msg.message_text,
                    timestamp: msg.timestamp,
                    sender: 'admin'
                };
            }).concat(userComplaints.map(function(msg) {
                return {
                    text: msg.complaint_text,
                    timestamp: msg.timestamp,
                    sender: 'user'
                };
            }));

            // Sort messages based on timestamp
            allMessages.sort(function(a, b) {
                return new Date(a.timestamp) - new Date(b.timestamp);
            });

            // Display messages
            allMessages.forEach(function(message) {
                var alignment = (message.sender === 'admin') ? 'right' : 'left';
                var messageDiv = createMessageDiv(message.text, alignment, message.timestamp);
                chatMessagesDiv.appendChild(messageDiv);
            });

            // Scroll to the bottom to show the latest messages
            chatMessagesDiv.scrollTop = chatMessagesDiv.scrollHeight;
        }

        function createMessageDiv(text, alignment, timestamp) {
            var messageDiv = document.createElement('div');
            messageDiv.className = 'chat-message ' + alignment;

            var messageContentDiv = document.createElement('div');
            messageContentDiv.className = 'message-content';
            messageContentDiv.innerText = text;

            var timestampDiv = document.createElement('div');
            timestampDiv.className = 'timestamp';
            timestampDiv.innerText = formatTimestamp(timestamp);

            messageDiv.appendChild(messageContentDiv);
            messageDiv.appendChild(timestampDiv);

            return messageDiv;
        }


        function formatTimestamp(timestamp) {
            // Add your timestamp formatting logic here if needed
            return timestamp;
        }

        function sendMessage() {
            // Get the message from the input field
            var message = document.getElementById('message-input').value;
            var user_id = document.getElementById('user_iid').value;
            var admin_id = <?php echo ($this->session->userdata('user_id')) ?>;
            var cmp_id = 1;

            if (user_id == '' || user_id == null) {
                alert("Please select a user");
            } else if (message == '' || message == null) {
                alert("Empty text; you can't send");
            } else {
                // Send the message to the server
                $.post(
                    "<?php echo site_url()?>admin/Chat_users/add_complaint", {
                        admin_id: admin_id,
                        user_id: user_id,
                        cm_id: cmp_id,
                        message: message
                    },
                    function(result) {
                        var jsn = JSON.parse(result);
                        if (jsn.res == true) {
                            console.log("Message sent");
                        } else {
                            console.log("Failed to send message");
                        }
                    }
                );
            }

            // Add the sent message to the chat messages div
            var chatMessagesDiv = document.getElementById('chat-messages');
            var newMessageDiv = createMessageDiv(message, 'right', new Date().toISOString());
            chatMessagesDiv.appendChild(newMessageDiv);

            // Clear the input field after sending the message
            document.getElementById('message-input').value = '';

            // Scroll to the bottom to show the latest message
            chatMessagesDiv.scrollTop = chatMessagesDiv.scrollHeight;
        }
        </script>

<script>
function searchUsers() {
    var searchInput = document.getElementById('user-search').value.toLowerCase();
    var users = document.getElementsByClassName('user');

    for (var i = 0; i < users.length; i++) {
        var userName = users[i].getElementsByTagName('span')[0].innerText.toLowerCase();
        var isVisible = userName.includes(searchInput);
        users[i].style.display = isVisible ? 'flex' : 'none';
    }
}
</script>



    </div>
</div>