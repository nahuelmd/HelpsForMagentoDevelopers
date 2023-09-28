# Magento 2.4 Commands

Below is a list of some common commands in Magento 2.4, ordered roughly from most used to least used. This list is not exhaustive, and usage frequency may vary depending on the project and development team.

## 1. Configuration and Maintenance

- `bin/magento setup:upgrade` - Updates the database and system schema.
- `bin/magento setup:di:compile` - Compiles Magento code.
- `php -d memory_limit=1024M bin/magento setup:di:compile` - Compile the Magento code by defining the php memory limit
- `bin/magento setup:static-content:deploy` - Deploys static content.
- `bin/magento cache:clean` - Cleans the cache.
- `bin/magento cache:flush` - Flushes the cache.
- `bin/magento indexer:reindex` - Reindexes all indexers.
- `bin/magento maintenance:enable` - Enables maintenance mode.
- `bin/magento maintenance:disable` - Disables maintenance mode.

## 2. Development and Debugging

- `bin/magento dev:source-theme:deploy` - Deploys static files for a theme in development.
- `bin/magento dev:tests:run` - Runs tests.
- `bin/magento dev:query-log:enable` - Enables database query logging.
- `bin/magento dev:query-log:disable` - Disables database query logging.

## 3. Module and Extension Management

- `bin/magento module:enable` - Enables one or more modules.
- `bin/magento module:disable` - Disables one or more modules.
- `bin/magento module:status` - Displays the status of all modules.

## 4. Product and Category Management

- `bin/magento catalog:product:attributes:cleanup` - Cleans up unused product attributes.
- `bin/magento catalog:images:resize` - Resizes product images.

## 5. Customer and Order Management

- `bin/magento customer:hash:upgrade` - Upgrades customer passwords to the latest hash algorithm.

## 6. Internationalization and Localization

- `bin/magento i18n:collect-phrases` - Collects phrases for translation.
- `bin/magento i18n:pack` - Packs translations.

## 7. Other Useful Commands

- `bin/magento admin:user:create` - Creates a new admin user.
- `bin/magento cron:run` - Runs cron jobs.
- `bin/magento setup:db-schema:upgrade` - Upgrades the database schema.

To get a complete and updated list of available commands, run the following command at the root of your Magento installation:

- `bin/magento list` -
