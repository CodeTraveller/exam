<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnaire Url</title>
</head>

<body>
    <p>Dear {{ $student->name }},</p>
    <p>Please click <a href="{{ route('questionnaires.show', $questionaireStudentUrl->url) }}">here</a> to access
        questionnaire.</p>
</body>

</html>
