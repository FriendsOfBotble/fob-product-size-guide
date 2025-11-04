# Changelog

All notable changes to this project will be documented in this file.

## [1.0.0] - 2025-01-15

### Added
- Initial release of FOB Product Size Guide plugin
- Custom jQuery table builder with dynamic rows and columns
- Image upload support for size guide diagrams
- Multiple assignment methods: Product, Category, and Brand
- Priority-based size guide resolution
- Bootstrap 5 responsive tables and modals
- Tabler UI admin interface
- Flexible display modes: Inline, Popup, and Conditional
- Multi-language support

### Features
- **Custom Table Builder**: jQuery-based table builder with add/remove functionality
- **Image Support**: Upload size guide diagrams alongside tables
- **Flexible Assignment**: Assign to products, categories, or brands
- **Priority System**: Product > Category > Brand hierarchy
- **Display Modes**: Inline, Popup, or Conditional based on table size
- **Bootstrap 5 Compatible**: Works with all Botble Bootstrap 5 themes
- **Responsive Design**: Mobile-friendly tables with Bootstrap responsive classes
- **Tabler UI Admin**: Beautiful admin interface matching Botble's design system
- **Theme Independent**: No theme-specific CSS required

### Technical
- Built on Botble CMS 7.5.0+
- Webpack-based asset compilation (SCSS + JavaScript)
- Hook-based integration with Ecommerce plugin
- Database migrations for size guides and relations
- PSR-12 code standards
- Clean, maintainable codebase

### Settings

**Display Options**
- Display Mode: Inline, Popup, or Conditional
- Row Threshold: For conditional display (default: 10 rows)
- Button Text: Customizable link text (default: "Size Guide")
- Modal Title: Customizable popup title

**Appearance**
- Show/hide size guide image
- Bootstrap table class selection
- Custom CSS support

### Database Tables
- `fob_product_size_guides`: Size guide definitions and table data (JSON)
- `fob_product_size_guide_relations`: Assignment relations (product/category/brand)

### Requirements
- PHP 8.2+
- Botble CMS 7.5.0+
- Ecommerce plugin activated
- Bootstrap 5 theme

### Installation
1. Extract plugin to `platform/plugins/fob-product-size-guide`
2. Run migrations: `php artisan migrate`
3. Activate plugin in admin panel
4. Configure settings in Product Size Guides > Settings
5. Create size guides and assign to products/categories/brands
6. (Optional) Build assets: `npm run dev` or `npm run prod`

### Usage Examples

**Creating a Size Guide:**
1. Admin > Product Size Guides > Create
2. Add name, description, and image
3. Use table builder to add headers and rows
4. Save and assign to products

**Assignment Priority:**
- If product has direct size guide: use it
- Else if product's category has size guide: use it
- Else if product's brand has size guide: use it
- Else: no size guide displayed

### Important Notes
- Table data stored as JSON for flexibility
- Supports unlimited rows and columns
- Bootstrap 5 required for frontend display
- Assets must be compiled for production use
- Works with all Botble ecommerce themes
