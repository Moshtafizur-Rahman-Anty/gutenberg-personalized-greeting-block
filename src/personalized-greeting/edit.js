import {useBlockProps, RichText} from "@wordpress/block-editor";


export default function Edit({attributes, setAttributes}) {


	return (


		<div {...useBlockProps()} >

			<RichText tagName="h2" value={attributes.greetingMessage} onChange={(newValue) => {
				setAttributes({"greetingMessage": newValue})
			}} />

		</div>


	);

}