<!DOCTYPE html>
<html>
<head>
    <title>Editable Mission and Vision</title>
    <style>
        .editable {
            border: 1px solid #ccc;
            padding: 10px;
            min-height: 100px;
        }
    </style>
</head>
<body>
    <h1>Company Name</h1>

    <h2>Mission</h2>
    <div id="mission" class="editable" contenteditable="true">Enter your mission here...</div>

    <h2>Vision</h2>
    <div id="vision" class="editable" contenteditable="true">Enter your vision here...</div>

    <button onclick="saveContent()">Save</button>

    <script>
        function saveContent() {
            // Get the updated mission and vision content
            var missionContent = document.getElementById('mission').innerHTML;
            var visionContent = document.getElementById('vision').innerHTML;

            // Perform any necessary validation or processing here
            
            // Perform AJAX request or any other server-side action to save the content
            // For this example, we'll just log the content to the console
            console.log('Updated Mission:', missionContent);
            console.log('Updated Vision:', visionContent);

            // Optionally, you can show a success message or perform other actions after saving the content
            alert('Content has been saved!');
        }
    </script>
</body>
</html>
