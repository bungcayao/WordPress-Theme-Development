/**
 * Extract Page Module JS
 *
 * Find all elements with a data-module attribute and call the corresponding module, if it exists.
 * @link https://github.com/ScottPolhemus/modular
 *
 **/

function pageModules() {
	// Setup a search for `data-module` attribute in our page modules.
	const modules = document.querySelectorAll('[data-module]');
	// Here we want to loop through all modules containing a data-module attribute
	for (let i = 0; i < modules.length; i++) {
		// Let that element be data-module[0], data-module[1], data-module[2], etc.
		let elem = modules[i];
		// Let's grab the data-module name from those element attributes
		let name = elem.getAttribute('data-module');

		// Setup -> Let's apply the above to fetch us the js filename
		// Set them to be `required`
		try {
			// Let that element be data-module[0], data-module[1], data-module[2], etc.
			var moduleSection = require('../../modules/' + name + '.js');
		} catch (e) {
			var moduleSection = false;
		};
		// If we have a moduleSection
		if (moduleSection) {
			// Initialize the module
			// new moduleSection(elem);
			// This was implemented from the link above. This caused moduleSection to be an uncaught constructor error.
			// I removed `new moduleSection(elem)` and the conflict seems to be resolved. The module .js file gets required correctly.
		}
	}
}