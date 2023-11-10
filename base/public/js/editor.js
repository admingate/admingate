(()=>{"use strict";function e(t){return e="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e(t)}function t(t,n){for(var o=0;o<n.length;o++){var i=n[o];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,(a=i.key,r=void 0,r=function(t,n){if("object"!==e(t)||null===t)return t;var o=t[Symbol.toPrimitive];if(void 0!==o){var i=o.call(t,n||"default");if("object"!==e(i))return i;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===n?String:Number)(t)}(a,"string"),"symbol"===e(r)?r:String(r)),i)}var a,r}const n=function(){function e(t,n,o){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.loader=t,this.url=n,this.t=o}var n,o,i;return n=e,(o=[{key:"upload",value:function(){var e=this;return this.loader.file.then((function(t){return new Promise((function(n,o){e._initRequest(),e._initListeners(n,o,t),e._sendRequest(t)}))}))}},{key:"abort",value:function(){this.xhr&&this.xhr.abort()}},{key:"_initRequest",value:function(){var e=this.xhr=new XMLHttpRequest;e.open("POST",this.url,!0),e.responseType="json"}},{key:"_initListeners",value:function(e,t,n){var o=this.xhr,i=this.loader,a=(0,this.t)("Cannot upload file:")+" ".concat(n.name,".");o.addEventListener("error",(function(){return t(a)})),o.addEventListener("abort",(function(){return t()})),o.addEventListener("load",(function(){var n=o.response;if(!n||!n.uploaded)return t(n&&n.error&&n.error.message?n.error.message:a);e({default:n.url})})),o.upload&&o.upload.addEventListener("progress",(function(e){e.lengthComputable&&(i.uploadTotal=e.total,i.uploaded=e.loaded)}))}},{key:"_sendRequest",value:function(e){var t=new FormData;t.append("upload",e),t.append("_token",$('meta[name="csrf-token"]').attr("content")),this.xhr.send(t)}}])&&t(n.prototype,o),i&&t(n,i),Object.defineProperty(n,"prototype",{writable:!1}),e}();function o(e){return o="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},o(e)}function i(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);t&&(o=o.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,o)}return n}function a(e,t,n){return(t=l(t))in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}function r(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,l(o.key),o)}}function l(e){var t=function(e,t){if("object"!==o(e)||null===e)return e;var n=e[Symbol.toPrimitive];if(void 0!==n){var i=n.call(e,t||"default");if("object"!==o(i))return i;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===t?String:Number)(e)}(e,"string");return"symbol"===o(t)?t:String(t)}var c=function(){function e(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.CKEDITOR={},this.shortcodes=[]}var t,o,l;return t=e,o=[{key:"initCkEditor",value:function(e,t){var o=this;if(this.CKEDITOR[e]||!$("#"+e).is(":visible"))return!1;var r=document.querySelector("#"+e);ClassicEditor.create(r,function(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?i(Object(n),!0).forEach((function(t){a(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):i(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}({fontSize:{options:[9,11,13,"default",17,16,18,19,21,22,23,24]},alignment:{options:["left","right","center","justify"]},shortcode:{onEdit:function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:function(){},n=null;o.shortcodes.length&&o.shortcodes.forEach((function(e){if(e.key===t)return n=e.description,!0})),o.shortcodeCallback({key:t,href:route("short-codes.ajax-get-admin-config",t),data:{code:e},description:n,previewImage:"",update:!0})},shortcodes:this.getShortcodesAvailable(r)||[],onCallback:function(e,t){o.shortcodeCallback({key:e,href:t.url,previewImage:""})}},heading:{options:[{model:"paragraph",title:"Paragraph",class:"ck-heading_paragraph"},{model:"heading1",view:"h1",title:"Heading 1",class:"ck-heading_heading1"},{model:"heading2",view:"h2",title:"Heading 2",class:"ck-heading_heading2"},{model:"heading3",view:"h3",title:"Heading 3",class:"ck-heading_heading3"},{model:"heading4",view:"h4",title:"Heading 4",class:"ck-heading_heading4"}]},placeholder:" ",toolbar:{items:["heading","|","fontColor","fontSize","fontBackgroundColor","fontFamily","bold","italic","underline","link","strikethrough","bulletedList","numberedList","|","alignment","direction","shortcode","outdent","indent","|","htmlEmbed","imageInsert","blockQuote","insertTable","mediaEmbed","undo","redo","findAndReplace","removeFormat","sourceEditing","codeBlock"]},language:{ui:window.siteEditorLocale||"en",content:window.siteEditorLocale||"en"},image:{toolbar:["imageTextAlternative","imageStyle:inline","imageStyle:block","imageStyle:side","toggleImageCaption","ImageResize"],upload:{types:["jpeg","png","gif","bmp","webp","tiff","svg+xml"]}},codeBlock:{languages:[{language:"plaintext",label:"Plain text"},{language:"c",label:"C"},{language:"cs",label:"C#"},{language:"cpp",label:"C++"},{language:"css",label:"CSS"},{language:"diff",label:"Diff"},{language:"html",label:"HTML"},{language:"java",label:"Java"},{language:"javascript",label:"JavaScript"},{language:"php",label:"PHP"},{language:"python",label:"Python"},{language:"ruby",label:"Ruby"},{language:"typescript",label:"TypeScript"},{language:"xml",label:"XML"},{language:"dart",label:"Dart",class:"language-dart"}]},link:{defaultProtocol:"http://",decorators:{openInNewTab:{mode:"manual",label:"Open in a new tab",attributes:{target:"_blank",rel:"noopener noreferrer"}}}},table:{contentToolbar:["tableColumn","tableRow","mergeTableCells","tableCellProperties","tableProperties"]},htmlSupport:{allow:[{name:/.*/,attributes:!0,classes:!0,styles:!0}]}},t)).then((function(t){t.plugins.get("FileRepository").createUploadAdapter=function(e){return new n(e,RV_MEDIA_URL.media_upload_from_editor,t.t)},t.insertHtml=function(e){var n=t.data.processor.toView(e),o=t.data.toModel(n);t.model.insertContent(o)},window.editor=t,o.CKEDITOR[e]=t;var i,a=90*$("#"+e).prop("rows"),r="ckeditor-".concat(e,"-inline");$(t.ui.view.editable.element).addClass(r).after("\n                    <style>\n                        .ck-editor__editable_inline {\n                            min-height: ".concat(a-100,"px;\n                            max-height: ").concat(a+100,"px;\n                        }\n                    </style>\n                ")),t.model.document.on("change:data",(function(){clearTimeout(i),i=setTimeout((function(){t.updateSourceElement()}),150)})),t.commands._commands.get("mediaEmbed").execute=function(e){t.insertHtml('[media url="'.concat(e,'"][/media]'))}})).catch((function(e){console.error(e)}))}},{key:"getShortcodesAvailable",value:function(e){var t,n=null===(t=$(e).parents(".form-group").find(".add_shortcode_btn_trigger"))||void 0===t?void 0:t.next(".dropdown-menu"),o=[];return n&&n.find("> li").length&&n.find("> li").each((function(){var e=$(this).find("> a");o.push({key:e.data("key"),hasConfig:e.data("has-admin-config"),name:e.text(),url:e.attr("href"),description:e.data("description")})})),this.shortcodes=o,o}},{key:"uploadImageFromEditor",value:function(e,t){var n=new FormData;"function"==typeof e.blob?n.append("upload",e.blob(),e.filename()):n.append("upload",e),$.ajax({type:"POST",data:n,url:RV_MEDIA_URL.media_upload_from_editor,processData:!1,contentType:!1,cache:!1,success:function(e){e.uploaded&&t(e.url)}})}},{key:"initTinyMce",value:function(e){var t=this;tinymce.init({menubar:!0,selector:"#"+e,min_height:110*$("#"+e).prop("rows"),resize:"vertical",plugins:"code autolink advlist visualchars link image media table charmap hr pagebreak nonbreaking anchor insertdatetime lists wordcount imagetools visualblocks",extended_valid_elements:"input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]",toolbar:"formatselect | bold italic strikethrough forecolor backcolor | link image table | alignleft aligncenter alignright alignjustify  | numlist bullist indent  |  visualblocks code",convert_urls:!1,image_caption:!0,image_advtab:!0,image_title:!0,placeholder:"",contextmenu:"link image inserttable | cell row column deletetable",images_upload_url:RV_MEDIA_URL.media_upload_from_editor,automatic_uploads:!0,block_unsupported_drop:!1,file_picker_types:"file image media",images_upload_handler:this.uploadImageFromEditor.bind(this),file_picker_callback:function(e){$('<input type="file" accept="image/*" />').click().on("change",(function(n){t.uploadImageFromEditor(n.target.files[0],e)}))}})}},{key:"initEditor",value:function(e,t,n){if(!e.length)return!1;var o=this;switch(n){case"ckeditor":$.each(e,(function(e,n){o.initCkEditor($(n).prop("id"),t)}));break;case"tinymce":$.each(e,(function(e,t){o.initTinyMce($(t).prop("id"))}))}}},{key:"init",value:function(){var e=this,t=$(document).find(".editor-ckeditor"),n=$(document).find(".editor-tinymce"),o=this;return t.length>0&&o.initEditor(t,{},"ckeditor"),n.length>0&&o.initEditor(n,{},"tinymce"),$(document).on("click",".show-hide-editor-btn",(function(t){t.preventDefault();var n=$(t.currentTarget).data("result"),i=$("#"+n);i.hasClass("editor-ckeditor")?e.CKEDITOR[n]&&void 0!==e.CKEDITOR[n]?(e.CKEDITOR[n].destroy(),e.CKEDITOR[n]=null,$(".editor-action-item").not(".action-show-hide-editor").hide()):(o.initCkEditor(n,{},"ckeditor"),$(".editor-action-item").not(".action-show-hide-editor").show()):i.hasClass("editor-tinymce")&&tinymce.execCommand("mceToggleEditor",!1,n)})),this.manageShortCode(),this}},{key:"shortcodeCallback",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},t=e.href,n=e.key,o=e.description,i=void 0===o?null:o,a=e.data,r=void 0===a?{}:a,l=e.update,c=void 0!==l&&l,d=e.previewImage,s=void 0===d?null:d;$(".short-code-admin-config").html("");var u=$(".short_code_modal .add_short_code_btn");c?u.text(u.data("update-text")):u.text(u.data("add-text")),null!=i&&$(".short_code_modal .modal-title strong").text(i),null!=s&&""!==s?$(".short_code_modal .shortcode-preview-image-link").attr("href",s).show():$(".short_code_modal .shortcode-preview-image-link").hide(),$(".short_code_modal").modal("show"),$(".half-circle-spinner").show(),$.ajax({type:"POST",data:r,url:t,success:function(e){if(e.error)return Admingate.showError(e.message),!1;$(".short-code-data-form").trigger("reset"),$(".short_code_input_key").val(n),$(".half-circle-spinner").hide(),$(".short-code-admin-config").html(e.data),Admingate.initResources(),Admingate.initMediaIntegrate()},error:function(e){Admingate.handleError(e)}})}},{key:"manageShortCode",value:function(){var e=this;$(".list-shortcode-items li a").on("click",(function(t){if(t.preventDefault(),"1"==$(this).data("has-admin-config"))e.shortcodeCallback({href:$(this).prop("href"),key:$(this).data("key"),description:$(this).data("description"),previewImage:$(this).data("preview-image")});else{var n=$(".add_shortcode_btn_trigger").data("result"),o="["+$(this).data("key")+"][/"+$(this).data("key")+"]";$(".editor-ckeditor").length>0?e.CKEDITOR[n].commands.execute("shortcode",o):$(".editor-tinymce").length>0&&tinymce.get(n).execCommand("mceInsertContent",!1,o)}})),$.fn.serializeObject=function(){var e={},t=this.serializeArray();return $.each(t,(function(){e[this.name]?(e[this.name].push||(e[this.name]=[e[this.name]]),e[this.name].push(this.value||"")):e[this.name]=this.value||""})),e},$(".add_short_code_btn").on("click",(function(t){t.preventDefault();var n=$(".short_code_modal").find(".short-code-data-form"),o=n.serializeObject(),i="";$.each(o,(function(e,t){var o=n.find('*[name="'+e+'"]'),a=o.data("shortcode-attribute");a&&"content"===a||!t||(e=e.replace("[]",""),"content"!==o.data("shortcode-attribute")&&(e=e.replace("[]",""),i+=" "+e+'="'+t+'"'))}));var a="",r=n.find("*[data-shortcode-attribute=content]");null!=r&&null!=r.val()&&""!==r.val()&&(a=r.val());var l=$(this).closest(".short_code_modal").find(".short_code_input_key").val(),c=$(".add_shortcode_btn_trigger").data("result"),d="["+l+i+"]"+a+"[/"+l+"]";if($(".editor-ckeditor").length>0)e.CKEDITOR[c].commands.execute("shortcode",d);else if($(".editor-tinymce").length>0)tinymce.get(c).execCommand("mceInsertContent",!1,d);else{var s=new CustomEvent("core-insert-shortcode",{detail:{shortcode:d}});document.dispatchEvent(s)}$(this).closest(".modal").modal("hide")}))}}],o&&r(t.prototype,o),l&&r(t,l),Object.defineProperty(t,"prototype",{writable:!1}),e}();$(document).ready((function(){window.EDITOR=(new c).init(),window.EditorManagement=window.EditorManagement||c}))})();