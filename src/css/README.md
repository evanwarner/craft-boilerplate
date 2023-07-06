# Authoring CSS for this Project

CSS for this project uses native CSS syntax, with some future-ready syntax enabled by a few PostCSS plugins. The philosophy being that once a feature becomes supported by a project's supported browsers, the PostCSS processing of the syntax can be disabled, leaving the syntax as-authored. The following future syntax is allowed in the codebase:

- [space-separated color notation](https://preset-env.cssdb.org/features/#color-functional-notation)
- [custom media queries](https://preset-env.cssdb.org/features#custom-media-queries)
- [custom selectors](https://preset-env.cssdb.org/features#custom-selectors)
- [media query ranges](https://preset-env.cssdb.org/features/#media-query-ranges)
- [nesting rules](https://preset-env.cssdb.org/features#nesting-rules)
- multiple selectors within the `:not()` [pseudo-class](https://preset-env.cssdb.org/features#not-pseudo-class)

CSS is broken up into separate logical files for ease of authoring, and [PostCSS Import](https://github.com/postcss/postcss-import) is used to concatenate files together into the production-ready stylesheet. Necessary vendor prefixes for supported browsers are automatically applied via Autoprefixer during the build process.



## Class Naming

Class names in HTML and CSS should conform to the following conventions.


### Blocks & Elements

An interface can be viewed as made up of components of varying sizes. A component is deemed a _block_ somewhat subjectively—generally if it can be pointed to and given a definitive name. "Main navigation", "footer" and "login form" are all common examples of blocks.

_Elements_ are the smaller pieces that make up a block. They are generally simple objects without much sub-structure (descendant HTML objects). Headings, inputs, buttons and images are generally deemed elements within a block.

A block can also contain other blocks. For example, a discussion block would likely contain many comment blocks, and an image gallery may be complex enough that each slide is a sub-block rather than an element.


### Semantic classes

The primary classes on HTML objects should describe _what_ the object is, and follow the form of `namespace-BlockName` or `namespace-BlockName--elementName`. The appropriate `BlockName` is the only required part of every semantic class. Rarely will a class contain all parts of the convention, and most classes will likely just match `BlockName--elementName` (e.g. `Login--nameInput`).

1. Namespaces are used to provide additional context for a class, and can be devised on a per-project basis. If no significant value is gained from namespacing, do not feel compelled to use them. The `namespace` should be short and lowercase and followed by one hyphen. Lead with an underscore if the namespace identifies a browser hack (e.g. `_ie8-`).

1. The `BlockName` should be PascalCase.

1. The `--elementName` should be camelCase and preceded by two hyphens.

RegEx pattern for qualifying semantic class names:  
`(_?[a-z][a-z0-9]*-)?[A-Z][a-zA-Z0-9]+(--[a-z][a-zA-Z0-9]*)?`


### Variant classes

Variants are instances of an object that have a visual difference from the base version. They are indicated by adding one or more variant classes after the primary semantic class for the object. A variant class should be camelCase and prefixed by one hyphen (e.g. `class="Alert -critical"`).

Variant classes should _never_ be used on their own in a selector, they should always be chained to a primary object class. If you find yourself wanting to use a variant class on its own, it's likely better to use a utility class.

RegEx pattern for qualifying variant class names:  
`-[a-z][a-zA-Z0-9]+`


### Object state classes

**Important:** State changes of an object should be indicated by setting/changing the relevant HTML attribute (including `aria-*`), if one exists.

If a relevant attribute does _not_ exist, runtime state changes of an object are signified by toggling a state class (not a `-variant` class). The class should be a hyphenated boolean-like statement in the form of `verb-stateDescriptor`, the latter part being camelCase (e.g. `is-filled` or `has-multipleChildren`).

RegEx pattern for qualifying object state class names:  
`[a-z]+-[a-z][a-zA-Z0-9]+`


### Utility classes

Utility classes should be used to enable commonly-used styles on numerous objects instead of duplicating the style declarations for each object. Utility classes follow the form of `namespace-utilityName`, the latter part being camelCase (e.g. `l-addGutter`).

Utility classes should be used only for styles that are rigidly applied to every object that bears the class. If you find yourself making variants or exceptions to the utility class, it is not a good case for using one.

Common namespaces for utility classes:
- `a` - appearance (e.g. `a-alternateBackground`)
- `i` - identity (e.g. `i-svgDefinitions`)
- `l` - layout (e.g. `l-clearfix`)
- `u` - general utility (e.g. `u-visuallyHidden`)

RegEx pattern for qualifying utility class names:  
`[a-z]+-[a-z][a-zA-Z0-9]+`


### JavaScript target indicator

Objects that are targeted by JavaScript should have the class name `-js-` as the _first_ class in their `class` attribute. This serves as an indicator that a script is using this element, and changes should be made with this in mind. The indicator class should _never_ be used in CSS, and does not need to be used when running query selectors in JavaScript. It simply acts as a notification.

---

## File Structure

CSS should generally be split up into a file-per-component to keep closely-related styles together and independent from non-related code. (This approach also allows easy processing for both http/1 and http/2 production servers.) The exact folder and file structure should be subjectively decided based on the needs of the project, but a good starting point is:

- `/1-settings`
- `/2-reset`
- `/3-global`
- `/4-helpers`
- `/5-components`
  - `/content`
  - `/global`
- `/6-pages`

---

## Rule Order

Within any given CSS file, the order of the rules should generally follow the top-down, outside-in order of the HTML it is styling. All screen-size media queries should come at the bottom of the file, with larger screen sizes lower (the "small screen first" approach).

When there are numerous rules that pertain to a given object (variants, interaction states, etc.), use the following order unless the desired result requires something different (based on the cascade or specificity).

```css
/* 1. Base object and variants */
.object {}

.condition .object {}

.object.has-state {}

.condition .object.has-state {}

.object.-variant {}

.condition .object.-variant {}

.object.-variant.has-state {}

.condition .object.-variant.has-state {}

/* 2. Interaction states: base object and variants */
.object:hover {}
/* ... (mirror the order of the base rules) */

/* 3. Generated content */
.object::before {}
/* ... (mirror the order of the base rules) */

/* 4. Interaction states: generated content */
.object:hover::before {}
/* ... (mirror the order of the base rules) */

/* 5. Child or sibling objects */
.object .child {}
/* ... (mirror the order of the base rules) */

/* 6. Interaction states: child or sibling objects */
.object:hover .child {}
/* ... (mirror the order of the base rules) */
```

---

## Linting

The `.eslintrc` file contains all the appropriate configuration to ensure consistent coding practice across CSS files, including spacing and indentation rules as well as required order for CSS properties.
