# 🧱 Personalized Greeting Block

> A custom Gutenberg block demonstrating inline editing, React state management, and the `<RichText>` component.

[![Watch the Video](https://img.shields.io/badge/YouTube-Watch_How_I_Built_This-FF0000?style=for-the-badge&logo=youtube&logoColor=white)](https://www.youtube.com/watch?v=fNtTpy7gp4k)

## Development Approach

When engineering this block, I focused on building a seamless, native editing experience while maintaining strict data integrity:

* **Native Inline Editing:** Instead of forcing the user to type the greeting into a clunky sidebar text box, I utilized the WordPress `@wordpress/block-editor` `<RichText>` component. This allows the user to click and type directly onto the block canvas for a true WYSIWYG experience.
* **Real-Time State Management:** The React UI captures every keystroke via the `onChange` handler and instantly updates the `greetingName` attribute using `setAttributes`. 
* **Data Serialization vs. Rendering:** This block demonstrates the distinction between saving data to the database as a JSON string inside the HTML comment, and safely rendering it on the frontend.
* **Security Standards:** All user-generated text is properly sanitized and escaped before being output to the frontend to prevent Cross-Site Scripting (XSS) vulnerabilities.

## 🛠️ Tech Stack & APIs Used
* **React / ES6+** (Editor UI, `<RichText>` Component)
* **PHP 7.4+** (Server-side rendering, WordPress Core API)
* **WordPress @wordpress/scripts** (Webpack / Babel compilation)

## 🚀 Installation & Testing
1. Download the `.zip` file from the releases or clone this repository.
2. Run `npm install` and `npm run build` to compile the assets.
3. Upload to the `/wp-content/plugins/` directory of your WordPress environment.
4. Activate the plugin through the WordPress admin dashboard.

---
### 👨‍💻 About the Developer

**Moshtafizur Rahman**  
WordPress & WooCommerce Developer | Remote European Experience  
🌐 [View my full portfolio](https://gutenberg.yourname.dev) | 💼 [Upwork Profile](https://upwork.com/fl/moshtafizur) | 🔗 [LinkedIn](https://linkedin.com/in/moshtafizur)