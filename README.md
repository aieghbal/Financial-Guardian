# 🛡️ Financial Guardian

> یک پلتفرم شخصی برای مدیریت، تحلیل و پایش وضعیت مالی

**Financial Guardian** یک پروژه عملی برای ساخت یک پلتفرم مدیریت مالی شخصی است؛ با هدف تبدیل داده‌های مالی پراکنده به اطلاعات قابل فهم و تصمیم‌های آگاهانه‌تر.

این پروژه از ابتدا با رویکرد **Real-World Software Engineering** ساخته می‌شود؛ یعنی علاوه بر پیاده‌سازی قابلیت‌ها، روی معماری، طراحی نرم‌افزار، تست، امنیت، API و تجربه کاربری نیز تمرکز داریم.

---

## 🎯 هدف پروژه

هدف Financial Guardian ساخت یک سیستم مالی مدرن است که کاربر بتواند در یک محیط واحد:

* وضعیت کلی دارایی‌های خود را مشاهده کند
* درآمد و هزینه‌های خود را مدیریت کند
* تراکنش‌های مالی را ثبت و دسته‌بندی کند
* سرمایه‌گذاری‌های خود را پیگیری کند
* گزارش‌های مالی دریافت کند
* روند وضعیت مالی خود را در طول زمان مشاهده کند

---

## 🧩 قابلیت‌های اصلی

### 💰 مدیریت مالی

* ثبت درآمد
* ثبت هزینه
* مدیریت حساب‌ها
* دسته‌بندی تراکنش‌ها
* مشاهده گردش مالی
* فیلتر و جستجوی تراکنش‌ها

### 📊 داشبورد مالی

نمایش اطلاعات مهم در یک نگاه:

* مجموع دارایی‌ها
* درآمد
* هزینه
* موجودی
* وضعیت سرمایه‌گذاری
* نمودارهای مالی
* روند تغییرات مالی

### 📈 سرمایه‌گذاری

مدیریت دارایی‌های سرمایه‌گذاری‌شده مانند:

* صندوق‌های سرمایه‌گذاری
* سهام
* ارز دیجیتال
* طلا
* سایر دارایی‌ها

و در ادامه:

* محاسبه سود و زیان
* قیمت خرید
* ارزش فعلی
* بازده سرمایه‌گذاری

### 🔐 امنیت

* Authentication
* Authorization
* مدیریت Session
* API Authentication
* Validation
* مدیریت دسترسی کاربران

---

# 🏗️ معماری پروژه

پروژه به صورت **Full-Stack** توسعه داده می‌شود.

```text
┌─────────────────────────────┐
│          React              │
│        Frontend             │
└──────────────┬──────────────┘
               │
               │ HTTP / JSON
               ▼
┌─────────────────────────────┐
│          Laravel            │
│         Backend             │
│                             │
│  Controllers                │
│  Services                   │
│  Actions                    │
│  Repositories               │
│  Domain Logic               │
│  Validation                 │
└──────────────┬──────────────┘
               │
               ▼
┌─────────────────────────────┐
│           MySQL             │
│          Database            │
└─────────────────────────────┘
```

---

# 🛠️ Tech Stack

### Backend

* PHP
* Laravel
* Laravel Sanctum
* MySQL
* RESTful API

### Frontend

* React
* JavaScript / TypeScript
* Vite
* CSS / UI Framework

### Development

* Git
* GitHub
* PHPUnit
* Laravel Pint
* API Testing

---

# 🧠 Engineering Focus

Financial Guardian صرف یک پروژه CRUD نیست.

در طول توسعه پروژه روی مفاهیم مهندسی نرم‌افزار نیز تمرکز می‌کنیم:

* Clean Code
* SOLID Principles
* Design Patterns
* Separation of Concerns
* Dependency Injection
* Service Layer
* Repository Pattern
* Domain Logic
* API Design
* Automated Testing
* Refactoring
* Security
* Scalability

هدف این است که تصمیم‌های معماری پروژه **دلیل مشخصی داشته باشند**، نه اینکه صرفاً از یک الگوی خاص استفاده کنیم.

---

# 🚀 Project Roadmap

پروژه به صورت مرحله‌ای توسعه داده می‌شود:

```text
Phase 0
Product Discovery
      ↓
Phase 1
Project Foundation
      ↓
Phase 2
Authentication
      ↓
Phase 3
Financial Accounts
      ↓
Phase 4
Transactions
      ↓
Phase 5
Categories & Budgets
      ↓
Phase 6
Financial Dashboard
      ↓
Phase 7
Investments
      ↓
Phase 8
Reports & Analytics
      ↓
Phase 9
React Frontend
      ↓
Phase 10
Advanced Features
      ↓
Phase 11
Testing & Quality
      ↓
Phase 12
Production & Deployment
```

> Roadmap ممکن است در طول توسعه پروژه بر اساس نیازهای واقعی تغییر کند.

---

# 📚 What I'm Learning

این پروژه به عنوان یک **Learning by Building Project** توسعه داده می‌شود.

به جای اینکه مفاهیم مختلف را به صورت جداگانه و تئوری یاد بگیریم، آنها را در یک پروژه واقعی استفاده می‌کنیم.

### Backend

* Laravel
* REST API
* Authentication
* Database Design
* Eloquent
* Validation
* Authorization
* Testing

### Frontend

* React
* Components
* State Management
* API Integration
* Forms
* Routing
* Data Visualization

### Software Engineering

* SOLID
* Design Patterns
* Clean Architecture
* Refactoring
* Testing
* Maintainability
* Scalability

---

# 🗂️ Project Structure

ساختار پروژه به مرور و همزمان با رشد سیستم شکل می‌گیرد.

نمونه‌ای از ساختار مورد انتظار Backend:

```text
app/
├── Actions/
├── Http/
│   ├── Controllers/
│   ├── Requests/
│   └── Resources/
├── Models/
├── Services/
├── Repositories/
└── ...
```

و Frontend:

```text
frontend/
├── components/
├── pages/
├── layouts/
├── hooks/
├── services/
├── stores/
└── ...
```

ساختار نهایی بر اساس نیاز واقعی پروژه تعیین خواهد شد.

---

# 🧪 Testing

پروژه از ابتدا با رویکرد تست‌محور توسعه داده نمی‌شود، اما **Testing از بخش‌های اصلی کیفیت پروژه خواهد بود.**

تست‌های مورد انتظار:

* Unit Tests
* Feature Tests
* API Tests
* Authentication Tests
* Authorization Tests

مثال:

```bash
php artisan test
```

---

# 🔐 Security

امنیت یکی از بخش‌های مهم Financial Guardian است.

برخی موارد مورد توجه:

* Authentication
* Authorization
* Input Validation
* Mass Assignment Protection
* API Authentication
* Secure Password Handling
* جلوگیری از دسترسی غیرمجاز به اطلاعات مالی کاربران

---

# ⚙️ Installation

### 1. Clone

```bash
git clone https://github.com/aieghbal/financial-guardian.git

cd financial-guardian
```

### 2. Install dependencies

```bash
composer install
```

### 3. Environment

```bash
cp .env.example .env
```

سپس اطلاعات Database را در `.env` تنظیم کنید.

### 4. Generate application key

```bash
php artisan key:generate
```

### 5. Run migrations

```bash
php artisan migrate
```

### 6. Run Laravel

```bash
php artisan serve
```

---

# 🔌 API

Financial Guardian از یک API برای ارتباط Backend و Frontend استفاده می‌کند.

نمونه:

```http
GET /api/dashboard
```

```http
GET /api/transactions
```

```http
POST /api/transactions
```

```http
GET /api/investments
```

API documentation در مراحل بعدی پروژه اضافه خواهد شد.

---

# 📸 Screenshots

> Screenshots پروژه پس از آماده شدن رابط کاربری اضافه خواهند شد.

---

# 🗺️ Current Status

🚧 **In Development**

پروژه در حال توسعه است و قابلیت‌ها به صورت مرحله‌ای اضافه می‌شوند.

---

# 💡 Philosophy

Financial Guardian با یک ایده ساده ساخته می‌شود:

> **Build something real.
> Learn by solving real problems.
> Improve the architecture as the system grows.**

قرار نیست از ابتدا یک سیستم پیچیده بسازیم.

ابتدا یک سیستم ساده و قابل استفاده ایجاد می‌کنیم و سپس با رشد نیازمندی‌ها، معماری و کد را نیز بهبود می‌دهیم.

---

# 👨‍💻 Author

**Amir Eghbal**

Laravel Developer

* GitHub: [@aieghbal](https://github.com/aieghbal)
* LinkedIn: [Amir Eghbal](https://linkedin.com/in/aieghbal/)

---

## ⭐ Support

اگر این پروژه برایتان جالب بود، می‌توانید Repository را ⭐ Star کنید.

Feedback و پیشنهادها نیز استقبال می‌شوند.
