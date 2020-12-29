# # SkuRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of a SKU. | [optional] 
**eccn** | **string** | The export control classification number. | 
**hs_code** | **string** | The international and US Harmonized System code (sometimes referred to as the Harmonized Tariff Schedule). | [optional] 
**part_number** | **string** | The manufacturer&#39;s part number. | [optional] 
**tax_code** | **string** | The designated tax code. | 
**name** | **string** | The product’s name. | 
**description** | **string** | A description of the product. | [optional] 
**image** | **string** | An image of the product. | [optional] 
**url** | **string** | A product url. | [optional] 
**weight** | **double** | The weight of the product measured in the unit specified by weightUnit. | [optional] 
**weight_unit** | **string** | The unit of measurement applied to the weight. | [optional] 
**country_of_origin** | **string** | A two-letter Alpha-2 country code as described in the ISO 3166 international standard. | 
**metadata** | [**map[string,AnyType]**](AnyType.md) | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


