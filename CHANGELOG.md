# Release Notes for KlaviyoConnect

## 3.0.3 - 2019-04-04

### Updated

- Fetch the first product image for each line item

## 3.0.2 - 2019-04-04

### Updated

- Replaced deprecated `includecss` and `includejs` Twig tags

## 3.0.1 - 2019-04-01

### Updated

- Fixed `profileMappings` on Settings page
- Ensure Craft Commerce is installed and enabled before adding event listeners
- Check for Craft Commerce before tracking order events
- Check for Craft Commerce when calling the restore cart action

## 3.0.0 - 2019-03-28

### Removed

- Profile mappings and related events, variables, etc

### Updated

- Restructured data sent to Klaviyo
- Custom properties are added to the root of models instead of to the `$extra` property
- User profile mapping is based on logged in user and data sent with the `profile[]` form parameter
- Replaced `events` service with `track`
- Renamed events to align with Klaviyo language (`AddProfilePropertiesEvent`, `AddCustomPropertiesEvent`, etc)
- Changed `api/update-profile` to `api/track`
- Fixed error when adding a user to a Klaviyo list
- Added `addToLists` to Track service
- Added docs site

## Added

- Order and Line Item events for users to add custom properties onto event bodies
- Profile event to add custom properties to user profiles

## 2.0.6 - 2019-02-28

- Changed `trackOrder` and `getOrderDetails` visibility.

## 2.0.1 - 2018-09-19

- Fixed user service events.

## 2.0.0 - 2018-06-26

- Migrated to Craft 3.
