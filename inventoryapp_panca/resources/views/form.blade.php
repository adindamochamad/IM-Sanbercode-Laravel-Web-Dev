<!DOCTYPE html>
<html lang="id">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Form Sign Up - SanberBook</title>
</head>

<body>
   <h1>Buat Account Baru!</h1>
   <h2>Sign Up Form</h2>
   <form action="/welcome" method="post">
      @csrf
      <p>
         <label for="first-name">First name:</label><br />
         <input type="text" id="first-name" name="first_name" />
      </p>

      <p>
         <label for="last-name">Last name:</label><br />
         <input type="text" id="last-name" name="last_name" />
      </p>

      <p>Gender:</p>
      <p>
         <input type="radio" id="male" name="gender" value="Male" />
         <label for="male">Male</label><br />
         <input type="radio" id="female" name="gender" value="Female" />
         <label for="female">Female</label><br />
         <input type="radio" id="other" name="gender" value="Other" />
         <label for="other">Other</label>
      </p>

      <p>
         <label for="nationality">Nationality:</label><br />
         <select id="nationality" name="nationality">
            <option value="Indonesian" selected>Indonesian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Australian">Australian</option>
            <option value="Palestinian">Palestinian</option>
            <option value="Russian">Russian</option>
            <option value="American">Amerika Serikat</option>
            <option value="Chinese">China</option>
            <option value="Korean">Korea</option>
         </select>
      </p>


      <p>Language Spoken:</p>
      <p>
         <input type="checkbox" id="lang-id" name="language[]" value="Bahasa Indonesia" />
         <label for="lang-id">Bahasa Indonesia</label><br />
         <input type="checkbox" id="lang-en" name="language[]" value="English" />
         <label for="lang-en">English</label><br />
         <input type="checkbox" id="lang-pl" name="language[]" value="Palestina" />
         <label for="lang-pl">Palestina</label><br />
         <input type="checkbox" id="lang-other" name="language[]" value="Other" />
         <label for="lang-other">Other</label>
      </p>

      <p>
         <label for="bio">Bio:</label><br />
         <textarea id="bio" name="bio" cols="40" rows="10"></textarea>
      </p>

      <p>
         <button type="submit">Sign Up</button>
      </p>
   </form>

   <a href="/">Kembali ke Beranda</a>
</body>

</html>
