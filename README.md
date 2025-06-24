# TradeFlow CRM/ERP

**TradeFlow** is a powerful CRM/ERP system built using PHP and Laravel, designed to streamline and manage your business operations including team management, clients, stock control, employee hierarchy, finance, and more.

![Laravel](https://img.shields.io/badge/Built%20With-Laravel-red?style=for-the-badge&logo=laravel)
![Status](https://img.shields.io/badge/Status-In%20Progress-yellow?style=for-the-badge)

---

## 🚀 Features (Planned & Implemented)

### ✅ Core Modules
- [x] User Authentication (Login/Register)
- [x] Welcome Page with UI
- [x] Team Management
- [x] Role-Based Access Control
- [x] User Search with Livewire
- [ ] Dynamic Team Assignments
- [ ] Team Members Listing

### 🔜 Upcoming Modules
- [ ] Client Management
- [ ] Product & Stock Management
- [ ] Invoice & Billing
- [ ] Finance Tracker (Expenses/Income)
- [ ] Employee Performance and Hierarchy
- [ ] Notifications System
- [ ] WebSocket Integration for Real-Time Updates

---

## 🧱 Tech Stack

| Layer             | Technology                  |
|------------------|-----------------------------|
| Backend           | PHP 8+, Laravel 10          |
| Frontend          | Blade Templates, Tailwind CSS |
| Interactivity     | Livewire                    |
| Database          | MySQL                       |
| Auth              | Laravel Breeze              |
| Version Control   | Git, GitHub                 |
| Realtime (Planned)| WebSockets, Laravel Echo    |

---

## 📁 Project Structure

```
TradeFlow/
├── app
│   ├── Console
│   ├── Exceptions
│   ├── Http
│   ├── Livewire        # Livewire components
│   ├── Models          # Eloquent models
│   └── Providers
├── bootstrap
├── config
├── database
│   ├── factories
│   ├── migrations      # Migrations for DB tables
│   └── seeders
├── public             # Public assets
├── resources
│   ├── css
│   ├── js
│   └── views           # Blade templates
├── routes
│   └── web.php         # Route definitions
├── storage
├── tests
└── ...
```

---

## 🛠️ Setup Instructions

1. **Clone the repo**

```bash
git clone https://github.com/Chirag-2199/TradeFlow.git
cd TradeFlow
```

2. **Install dependencies**

```bash
composer install
npm install && npm run dev
```

3. **Configure environment**

```bash
cp .env.example .env
php artisan key:generate
```

4. **Set up database**

```bash
php artisan migrate
```

5. **Run the app**

```bash
php artisan serve
```

---

## 👨‍💻 Developer

**Chirag Dhimgra**  
💼 Full-stack Developer  
🌐 [GitHub](https://github.com/Chirag-2199)  
💼 [LinkedIn](https://www.linkedin.com/in/chiragk2199/)  
📧 chiragkumar2199@gmail.com  

---

## 🤝 Contributing

Contributions, issues and feature requests are welcome!  
Please fork the repository and create a pull request, or open an issue to discuss changes.

---

## 📄 License

This project is open-source and available under the [MIT License](LICENSE).

---

## ❤️ Acknowledgments

- Laravel Team  
- Livewire Community  
- Tailwind CSS  
- All open-source contributors
