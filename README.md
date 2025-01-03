
# Kanboard Automatic Action: Set Due Date on Column Change

This Kanboard plugin automatically sets the due date of a task when it is moved to a specified column. Users can configure the target column and due date as part of the action's settings.

## Features

- Automatically sets the due date for tasks moved to a specific column.
- Supports dynamic selection of target columns from the board.
- Allows flexible due date configurations (e.g., relative dates like "+1 day" or specific dates).

## Installation

1. Clone this repository into the `plugins` directory of your Kanboard installation:
   ```bash
   git clone https://github.com/ahcened/plugin-setDueDateWhenTaskMovedToColumn plugins/SetDueDateWhenTaskMovedToColumn
   ```
2. Ensure the plugin directory is named `SetDueDateWhenTaskMovedToColumn`.

3. Refresh the Kanboard plugins page or restart your Kanboard instance.

## Usage

1. Navigate to the **Automatic Actions** section of your Kanboard project.
2. Add a new action and select **Set Due Date When Task Moved To Column**.
3. Configure the action:
   - Choose the target column from the dropdown.
4. Save the action. The plugin will now automatically set the due date when a task is moved to the configured column.

## Configuration Parameters

- **Target Column**: The column where the action is triggered (e.g., "Finished").
  
## Compatibility

- Requires Kanboard version >= 1.2.0.
- Tested with PHP 7.4 and PHP 8.0.

## License

This plugin is released under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contributing

Contributions are welcome! Please submit pull requests or open issues to report bugs and suggest improvements.

## Support

For any questions or issues, feel free to open a ticket on the [GitHub repository](https://github.com/ahcened/plugin-setDueDateWhenTaskMovedToColumn/issues).

---
**Developed by:** Ahcene Dahmane
**GitHub:** [ahcened](https://github.com/ahcened)
