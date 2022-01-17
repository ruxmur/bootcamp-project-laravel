<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
  <p>User requested attention:</p>
  <p>User firstName: {{ $firstName }}</p>
  <p>User lastName: {{ $lastName }}</p>
  <p>User email: {{ $email }}</p>
  <p>User tel: {{ $tel }}</p>
  <p>Sex interested in: {{ implode(',', $sex ?? []) }}</p>
  <p>Membership interested in: {{ implode(',', $membership ?? []) }}</p>
  <p>Sport interested in: {{ implode(',', $sport ?? []) }}</p>
  <p>Coach interested in: {{ implode(',', $coach ?? []) }}</p>
  <p>User messege:</p>
  <p>{{ $messageText }}</p>

</body>
</html>