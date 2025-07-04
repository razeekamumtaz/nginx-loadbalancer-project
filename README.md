# Nginx Load Balancer Project

A 3-VM setup that demonstrates a load-balanced deployment using **Nginx**, **WordPress (Apache)**, **Django (Gunicorn)**, and a **BIND9 DNS server**.

---

## 🧱 VM Roles

- **Load Balancer VM**
  - Nginx reverse proxy
  - BIND9 DNS (`wp.razeeka.local`, `dj.razeeka.local`)
  
- **Backend1 VM**
  - Apache + WordPress
  - Django + Gunicorn

- **Backend2 VM**
  - Apache + WordPress
  - Django + Gunicorn

---

## 🗂️ Project Structure

nginx-loadbalancer-project/

├── backend1/ # Apache, WordPress, Django & Gunicorn configs

├── backend2/ # Same as backend1

├── loadbalancer/ # Nginx configs

├── dns/ # BIND9 zone files and config

└── README.md


---

## ⚙️ Stack

- **Nginx** — Reverse Proxy
- **Apache2** — Web Server
- **Gunicorn** — Django WSGI server
- **BIND9** — DNS resolver

---

## 🚀 Run Steps

1. **Set up DNS (BIND9)** on Load Balancer
2. **Run Gunicorn** using `start_gunicorn.sh` on both backends
3. **Enable Apache** and serve WordPress
4. **Configure Nginx** for reverse proxy to:
   - `wp.razeeka.local` → WordPress
   - `dj.razeeka.local` → Django

---

## 🧪 Test

- Update your host’s DNS to point to the Load Balancer IP
- Access:
  - `http://wp.razeeka.local`
  - `http://dj.razeeka.local`

---

## 👤 Author

**Razeeka Mumtaz**  
🔗 [GitHub: @razeekamumtaz](https://github.com/razeekamumtaz)
