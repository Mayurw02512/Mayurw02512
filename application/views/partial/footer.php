<button id="chatbotButton">Open Chatbot</button>
    <button id="closeChatbotButton" style="display: none;">Close Chatbot</button>

<!-- Chatbot iframe (initially hidden) -->
<iframe id="chatbotFrame"  src='https://webchat.botframework.com/embed/faq-language-service-bot?s=H7QR6L8cAGw.aJKtOgQnDEfmAPwdpy_z8T0N0hVoF8MNC2ads9LOxUg'   width="300" height="400" frameborder="0" style="display:none;"></iframe>
<!-- JavaScript to handle button click -->
<script>
        var chatbotButton = document.getElementById('chatbotButton');
        var closeChatbotButton = document.getElementById('closeChatbotButton');
        var chatbotFrame = document.getElementById('chatbotFrame');

        chatbotButton.addEventListener('click', function () {
            // Show the chatbot iframe
            chatbotFrame.style.display = 'block';

            // Toggle button visibility
            chatbotButton.style.display = 'none';
            closeChatbotButton.style.display = 'inline-block';
        });

        closeChatbotButton.addEventListener('click', function () {
            // Hide the chatbot iframe
            chatbotFrame.style.display = 'none';

            // Toggle button visibility
            chatbotButton.style.display = 'inline-block';
            closeChatbotButton.style.display = 'none';
        });
    </script>
