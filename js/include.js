
function initialize()
{
	var
		sName = 'custom',
		sHeaderTitle = 'Custom',
		sDocumentTitle = 'Custom',
		sTemplateName = 'Plugin_CustomScreen',
		oViewModelClass = CCustomScreen
	;
	
	window.AfterLogicApi.addScreenToHeader(sName, sHeaderTitle, sDocumentTitle, sTemplateName, oViewModelClass);
}

initialize();