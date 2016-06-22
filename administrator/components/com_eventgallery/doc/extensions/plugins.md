## Search Plugin {#plugin-search}

The Search Plugin integrates with the Joomla Search component and finds events. It indexes the following fields:

- event description
- event text
- event tags

## Smart Search Plugin {#plugin-smartsearch}

The Smart Search Plugin provides an integration with the Joomla Smart Search component. It helps to fill the search index with information about your events. For that it uses the following fields: 

- event description
- event text
- event tags

Make sure the content plugin is enabled to update the index once you change events in the back end. If you sync your file system with the database make sure you rebuild the search index manually. 

## Content Plugin {#plugin-content}

This plugin is useful if you want to add some images of an event to an article. Instead of reading through the syntax below you can enable the *plugin Event Gallery - Editor Button* any you'll get an additional button below your text editor. Just click the Event Gallery button and you can use a dialog to create the tag you need. 

### Images

Syntax: 

- \{eventgallery event="foo" max_images=4 thumb_width=75\}

```max_images``` and ```thumb_width``` are optional. The value for the ```event``` parameter has to be the value of the folder name field of an event. Set ```max_images=0``` to show all images of an event.

### Description

If you want to display the description of an event use this tag: 

- \{eventgallery event="foo" attr="description"\}

### Text

If you want to display the text of an event use this tag: 

- \{eventgallery event="foo" attr="text" type="intro"\}
- \{eventgallery event="foo" attr="text" type="full"\}

If you used a page break tag in your text the intro and full content will be different. 

### Lightbox

You want to use the lightbox instead of a link to the gallery? Just add the parameter ```mode=lightbox```.

- \{eventgallery event="foo" max_images=4 thumb_width=75 mode=lightbox\}

### Image List

If you want to include a image list with the auto layout which is used on event pages too you can use the following tag. Be carefull with this tag. As of now only one event or tag per page is supported with this format. 

- \{eventgallery event="foo" max_images=4 mode=imagelist\}