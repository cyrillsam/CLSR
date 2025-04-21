# Integra ERP Website

A simple website template for Integra ERP’s landing page and dashboard, built with PHP and MySQL.

## Getting Started

### Prerequisites

Before installing the project, make sure you have the following tools installed:

- [Git](https://git-scm.com/downloads)
- [Composer](https://getcomposer.org/)
- [XAMPP](https://www.apachefriends.org/) or any local server stack
- [Node.js](https://nodejs.org/en) (optional, for live reload)
- [pnpm](https://pnpm.io/installation) (optional, for live reload)

### Installation

1. [Download](https://github.com/numalayang/IntegraTrialWebTemplate/archive/refs/heads/main.zip) or clone the repository into your server’s root directory (`htdocs` for XAMPP):

   ```bash
   git clone https://github.com/numalayang/IntegraTrialWebTemplate.git
   ```

2. Navigate to the project folder:

   ```bash
   cd IntegraTrialWebTemplate
   ```

3. Set up a virtual host:

   #### Windows

   - Edit `C:/xampp/apache/conf/extra/httpd-vhosts.conf` and add:

     ```apache
     <VirtualHost *:80>
       DocumentRoot "C:/xampp/htdocs/IntegraTrialWebTemplate/"
       ServerName IntegraTrialWebTemplate.test
       <Directory "C:/xampp/htdocs/IntegraTrialWebTemplate/">
         AllowOverride All
         Require all granted
       </Directory>
     </VirtualHost>
     ```

   - Then add this line to your `C:/Windows/System32/drivers/etc/hosts` file:

     ```
     127.0.0.1 IntegraTrialWebTemplate.test
     ```

   #### macOS

   - Edit `/Applications/XAMPP/xamppfiles/etc/extra/httpd-vhosts.conf` and add:

     ```apache
     <VirtualHost *:80>
       DocumentRoot "/Applications/XAMPP/xamppfiles/htdocs/IntegraTrialWebTemplate/"
       ServerName IntegraTrialWebTemplate.test
       <Directory "/Applications/XAMPP/xamppfiles/htdocs/IntegraTrialWebTemplate/">
         AllowOverride All
         Require all granted
       </Directory>
     </VirtualHost>
     ```

   - Also add this to `/etc/hosts`:

     ```
     127.0.0.1 IntegraTrialWebTemplate.test
     ```

4. Install PHP dependencies:

   ```bash
   composer install
   ```

5. Start your server:
   - Open XAMPP.
   - Start the **Apache** and **MySQL** services.

> [!NOTE]
> Always include this line at the top of any new PHP file:
>
> ```php
> require_once $_SERVER["DOCUMENT_ROOT"] . "include/vendor/autoload.php";
> ```

## Live Reload (optional)

If you want automatic browser reloads during development, follow these steps:

1. Install Node dependencies:

   ```bash
   pnpm install
   ```

2. Start the dev server:

   ```bash
   pnpm run dev
   ```

3. Visit `http://localhost:5173` in your browser to view the live reload version.

> [!NOTE]
> When adding a new PHP page, include the following scripts before the closing `</body>` tag:

```html
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/main.js"></script>
```
