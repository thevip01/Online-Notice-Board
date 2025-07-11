# 📌 Online Notice Board (College Project)

The **Online Notice Board** is a web-based platform where users can post, view, and manage notices or announcements. It provides a digital space for organizations (e.g., schools, offices, communities) to communicate important information to their audience via computers, tablets, and mobile devices.

---

## 🌐 Live Demo / Preview

*Currently not deployed — run locally using a PHP server or XAMPP.*

---

## 🛠 Tech Stack

- **HTML** – Frontend structure  
- **CSS** – Styling (`admin.css`, `admin2.css`, `new.css`)  
- **JavaScript** – Form validation (`Validating.js`)  
- **PHP** – Backend scripting and form handling (`index.php`, `action.php`, etc.)  
- **MySQL** – Database (via `conn.php`)

---

## 📂 Project Structure

```bash
.
├── index.php                 # Main homepage
├── Admin.html               # Admin login page
├── Admin_screen.php         # Admin dashboard
├── Feedback.html            # User feedback form
├── action.php               # Handles user input
├── add_query.php            # Adds notices to DB
├── conn.php                 # Database connection
├── Validating.js            # JavaScript form validation
├── admin.css / new.css      # Stylesheets
├── About.html               # About page
├── images/                  # iconv50.png, software.png, 16676.jpg
````

---

## ✨ Features

* 📝 Post and display notices online
* 🔐 Admin panel for notice management
* 📬 Feedback form for users
* 💡 Simple and responsive interface
* 🛡️ Input validation and basic form handling

---

## 🚀 How to Run Locally

### Requirements:

* [XAMPP](https://www.apachefriends.org/) or any local PHP server
* Web browser (Chrome, Firefox, etc.)

### Steps:

1. **Download or clone the repository**

   ```bash
   git clone https://github.com/thevip01/Online-Notice-Board.git
   ```

2. **Move the project folder to your XAMPP `htdocs` directory:**

   ```
   C:\xampp\htdocs\Online-Notice-Board
   ```

3. **Start Apache and MySQL from the XAMPP control panel.**

4. **Create a MySQL database:**

   * Open `phpMyAdmin`
   * Create a new database (e.g., `notice_board`)
   * Import the SQL tables manually (if a `.sql` file is provided, or based on code in `conn.php` and `add_query.php`)

5. **Visit the project in your browser:**

   ```
   http://localhost/Online-Notice-Board/index.php
   ```

---

## 📸 Screenshots

> Add images in a `screenshots/` folder and include like:

```markdown
![Home Page](screenshots/home.png)
![Admin Panel](screenshots/admin.png)
```

---

## 📄 License

This project is open for educational and learning purposes. If you reuse or modify it, crediting the original author is appreciated.

---

## 🙋‍♂️ Author

**Vipul K. Parmar**
GitHub: [@thevip01](https://github.com/thevip01)

---

## 📬 Feedback & Contributions

Feel free to submit issues or pull requests if you have suggestions or improvements. Contributions are welcome!
