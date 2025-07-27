# 📚 StoryNest Bookstore

StoryNest is a simple yet elegant web-based book inventory system that allows users to add, view, and manage book entries with a historical log of additions and a visualized collection table.

---

## 🌟 Features

- 🖋️ **Add Book**: Enter book title, price, and available stock.
- 📜 **History**: View all books added over time.
- 📚 **Book Collection**: Tabular view of all books in the store.
- 📂 **Sell & Update**: Functionality to simulate selling and updating book records.
- 📈 **Dashboard**: Interfaces for admin, users, and collectors.

---

## 🛠️ Built With

- **Frontend**: HTML, CSS, Bootstrap, Font Awesome
- **Backend**: PHP
- **Database**: MySQL (via `db_connect.php`)

---

## 📁 Folder Structure

```
├── addbook.html # Book entry form UI
├── addbook.php # Backend handler to insert book into DB
├── main.html # Landing page
├── history.php # Displays previously added books
├── displayhist.php # Backend handler for book history
├── table.php # Lists current inventory
├── updatedetails.php # Update existing book details
├── sell.php # Simulate book sales
├── hell.png # Background image
├── README.md # This file
```

---

## 🔐 Authentication & Roles (Optional)

Supports multiple dashboards:
- `admin_dashboard.php`
- `collector_dashboard.php`
- `user_dashboard.php`


