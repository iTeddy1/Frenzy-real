<form action="{{ route('user.contact.submit') }}" method="POST">
  @csrf

  <div>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
  </div>

  <div>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
  </div>

  <div>
    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>
  </div>

  <button type="submit">Submit</button>
</form>