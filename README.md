# 🚀 Web357 Test Component - Developer Skills Assessment

Welcome to the Web357 developer skills assessment! 👋 This is a practical test designed to evaluate your understanding of Joomla component and module development. You'll be working with a basic recipes component and implementing new features, modifying existing functionality, and creating a complementary module.

## 📝 Development Requirements

### 1. Changelog of Modifications ⭐

    ```
    
    // Task 1: Component Parameters : ✅

    - Included a Serving Size field in the recipe form.
    - Displayed the Serving Size field in the Recipes Listing within the Admin Area.

    // Task 2: Frontend Display : ✅

    - Added a Serving Size field to the recipe form.
    - Displayed the Serving Size on both the Recipes list and individual recipe views on the frontend.
    - Replaced the text-based Difficulty Levels with Font Awesome icons on the Recipes list and individual recipe views on the frontend.
    - Presented the Difficulty Levels in a hidden label.

    // Task 3: Backend Functionality : ✅

    - Added a dropdown filter in the backend recipe list to sort by difficulty level (easy/medium/hard).

    // Task 4: Module Development : ✅

    - Developed a new module (mod_web357_random_recipe) to display a random recipe on each page reload, including the recipe title, difficulty, and description.

    ```

### 2. Documentation 📚

-   Create/update the README.md file in your repository
-   Your README.md should include:
    -   ✨ Installation instructions
    -   📋 Changelog of your modifications
    -   🖼️ Screenshots of new features
    -   🔍 How to test your changes
    -   💡 Any assumptions or decisions you made
-   **Important:** Follow [Joomla Coding Standards](https://developer.joomla.org/coding-standards/basic-guidelines.html)

## 🔧 Getting Started

### Fork & Installation Instructions 📥

1. Download and install **Joomla 5.x** from https://downloads.joomla.org/
2. Fork this repository to your GitHub account:
    - Click the "Fork" button at the top right of this page
    - Select your GitHub account as the destination
3. Copy the files maintaining the directory structure into your Joomla installation
4. Install the component through Joomla's Extension Manager

### Working on the Test 💻

-   Make your changes in your forked repository
-   Commit regularly with clear messages
-   Push your changes to your fork
-   Keep your fork updated if there are any changes to the original repository

## ✨ Test Requirements

### 1. Component Parameters 🎛️

-   Add a new parameter "_serving_size_" (type="list") with options:
    -   1-2 servings
    -   2-4 servings
    -   4-6 servings
    -   6-8 servings
    -   8+ servings

### 2. Frontend Display 🎨

-   Currently, difficulty levels are shown as plain text ("easy", "medium", "hard")
-   **Task:** Replace the text with Font Awesome icons:
    -   Easy: One icon ⭐
    -   Medium: Two icons ⭐⭐
    -   Hard: Three icons ⭐⭐⭐
-   You can choose any appropriate Font Awesome icon
-   _Important:_ Ensure accessibility by keeping the text in a hidden label
-   Display serving size in both recipe list and single recipe views

### 3. Backend Functionality ⚙️

-   Add a filter dropdown in the backend recipes list to filter by difficulty level (easy/medium/hard)
-   The filter should:
    -   Be located in the filters toolbar above the recipes list
    -   Allow filtering recipes by each difficulty level
    -   Remember the selected filter state
    -   Clear when "Clear" button is clicked

### 4. Module Development 📦

-   Create a new module (`mod_web357_random_recipe`)
-   Display one random recipe on each page reload
-   Include basic recipe details (title, difficulty icons, serving size)
-   Add a link to the full recipe

### 5. Testing 🧪

Write tests using **PHP Unit** _or_ **Cypress**:

-   Test the recipe filtering function by difficulty level
-   Test the random recipe selection in the module
-   _Choose either:_
    -   🔍 **PHP Unit:** Write unit tests for the component and module functions
    -   🔄 **Cypress:** Create end-to-end tests for the frontend functionality

## 📤 Submission Requirements

### 1. Repository 📁

-   Provide access to your Git repository
-   Ensure the repository includes all commits showing your development process

### 2. Documentation 📝

-   Updated README.md with:
    -   📋 Changelog detailing all modifications
    -   🖼️ Screenshots of new features
    -   📥 Installation instructions
    -   ✅ Testing instructions

### 3. Installable Package 📦

-   Provide a ZIP file that can be installed through Joomla's Extension Manager
-   The package should include both the component and module
-   All new features should be functional after installation

**_Important Note:_** The final submission should allow us to install the component and module on a fresh Joomla installation to review all implemented changes.

## 📮 Ready to Submit?

When you've completed all the requirements:

1. Ensure your repository is up to date
2. Double-check your documentation and screenshots
3. Create your installable ZIP package
4. Send an email to careers@web357.com with:
    - Link to your repository
    - Your installable ZIP file
    - Any additional notes or explanations

Good luck! 🍀
