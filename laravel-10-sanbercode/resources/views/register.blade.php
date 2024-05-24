<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Sign Up</title>
  </head>
  <body>
    <div class="container">
      <h1>Buat Account Baru!</h1>
      <form action="{{route('send')}}" method="POST">
        @csrf
        <h4>Sign Up Form</h4>
        <div>
          <label for="f-name">First name:</label><br />
          <input type="text" name="firstName" id="f-name" required />
        </div>
        <br />
        <div>
          <label for="l-name">Last name:</label><br />
          <input type="text" name="lastName" id="l-name" required />
        </div>
        <br />
        <div>
          <label>Gender:</label><br />
          <input type="radio" id="male" name="Gender" value="Male" checked />
          <label for="male">Male</label><br />
          <input type="radio" id="female" name="Gender" value="Female" />
          <label for="female">Female</label><br />
          <input type="radio" id="other" name="Gender" value="Other" />
          <label for="other">Other</label>
        </div>
        <br />
        <div>
          <label for="nationality">Nationality:</label><br />
          <select name="nationality" id="nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Singapore">Singapore</option>
            <option value="Timor-Leste">Timor-Leste</option>
            <option value="Philippines">Philippines</option>
          </select>
        </div>
        <br />
        <div>
          <label>Language Spoken:</label><br />
          <input type="checkbox" id="indonesia" name="indonesia" value="indonesia" />
          <label for="indonesia"> Bahasa Indonesia</label><br />
          <input type="checkbox" id="english" name="english" value="english" />
          <label for="english"> English</label><br />
          <input type="checkbox" id="other" name="other" value="other" />
          <label for="other"> Other</label><br />
        </div>
        <br />
        <div>
          <label for="bio">Bio:</label><br /><br />
          <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" id="submit">Sign Up</button>
      </form>
    </div>
  </body>
</html>
