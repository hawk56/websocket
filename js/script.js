$(document).ready(function(){
    //create a new WebSocket object.
    var wsUri = "ws://localhost:9000/demo/ws.php";
    websocket = new WebSocket(wsUri);

    websocket.onopen = function(ev) { // connection is open
        $('#message_box').append("<div class=\"system_msg\">Connected!</div>"); //notify user
        var user_id = parseInt($('#user_name').attr('data-id'));
        var msg = {
            type: 'auth',
            message: 'Подключился',
            name: $('#user_name').html(),
            id: user_id,
            color : '<?php echo $colours[$user_colour]; ?>'
        };
        //convert and send data to server
        websocket.send(JSON.stringify(msg));
    }

    $('#send-btn').click(function(){ //use clicks message send button
        var mymessage = $('#message').val(); //get message text
        var myname = $('#name').val(); //get user name

        if(myname == ""){ //empty name?
            alert("Enter your Name please!");
            return;
        }
        if(mymessage == ""){ //emtpy message?
            alert("Enter Some message Please!");
            return;
        }
        var to = 0;
        $('#users_list option:selected').each(function(){
            to = $(this).val();
        });
        //prepare json data
        var msg = {
            message: mymessage,
            name: myname,
            to: to,
            color : '<?php echo $colours[$user_colour]; ?>'
        };
        //convert and send data to server
        websocket.send(JSON.stringify(msg));
    });

    //#### Message received from server?
    websocket.onmessage = function(ev) {
        var msg = JSON.parse(ev.data); //PHP sends Json data
        var type = msg.type; //message type
        var umsg = msg.message; //message text
        var uname = msg.name; //user name
        var ucolor = msg.color; //color
        var online = msg.online;

        $('.onlineStatus').remove();
        online.forEach(function(item, i, arr) {
            $('#list_user_id_'+item).append('<span class="label label-success onlineStatus">Online</span>');
        });
        if(type == 'usermsg')
        {
            $('#message_box').append("<div><span class=\"user_name\" style=\"color:#"+ucolor+"\">"+uname+"</span> : <span class=\"user_message\">"+umsg+"</span></div>");
        }
        if(type == 'system')
        {
            $('#message_box').append("<div class=\"system_msg\">"+umsg+"</div>");
        }

        $('#message').val(''); //reset text
    };

    websocket.onerror	= function(ev){$('#message_box').append("<div class=\"system_error\">Error Occurred - "+ev.data+"</div>");};
    websocket.onclose 	= function(ev){$('#message_box').append("<div class=\"system_msg\">Connection Closed</div>");};
});

/* ##### */

function sendMessage(){
    
}