# # Source - https://stackoverflow.com/a
# # Posted by Bob Haffner, modified by community. See post 'Timeline' for change history
# # Retrieved 2025-12-10, License - CC BY-SA 4.0

# url = (
#       "https://raw.githubusercontent.com/python-visualization/folium/master/examples/data"
#   )
#   state_geo = f"{url}/us-states.json"
#   state_unemployment = f"{url}/US_Unemployment_Oct2012.csv"
#   state_data = pd.read_csv(state_unemployment)
  
#   m = folium.Map(location=[48, -102], zoom_start=3)
  
#   # capturing the return of folium.Choropleth()
#   cp = folium.Choropleth(
#       geo_data=state_geo,
#       name="choropleth",
#       data=state_data,
#       columns=["State", "Unemployment"],
#       key_on="feature.id",
#       fill_color="YlGn",
#       fill_opacity=0.7,
#       line_opacity=0.2,
#       legend_name="Unemployment Rate (%)",
#   ).add_to(m)
  
#   # creating a state indexed version of the dataframe so we can lookup values
#   state_data_indexed = state_data.set_index('State')
  
#   # looping thru the geojson object and adding a new property(unemployment)
#   # and assigning a value from our dataframe
#   for s in cp.geojson.data['features']:
#       s['properties']['unemployment'] = state_data_indexed.loc[s['id'], 'Unemployment']
  
#   # and finally adding a tooltip/hover to the choropleth's geojson
#   folium.GeoJsonTooltip(['name', 'unemployment']).add_to(cp.geojson)
  
#   folium.LayerControl().add_to(m)
  
#   m

# # tab = { "features": [
# #                     {"type": "Feature",
# #                     "properties": {
# #                     "INSEE_DEP": "09",}},
# #                     {"type": "Feature",
# #                     "properties": {
# #                     "INSEE_DEP": "11",}},
# #                     {"type": "Feature",
# #                     "properties": {
# #                     "INSEE_DEP": "12",}},
# #                     ]}

# import chardet

# with open("document\\capacites.geojson", "rb") as f:
#     enc = chardet.detect(f.read())
# print(enc)

# lire en latin-1
with open("document\\capacites.geojson", "r", encoding="latin-1") as f:
    txt = f.read()

# réécrire correctement encodé en UTF-8
with open("document\\capacites_utf8.geojson", "w", encoding="utf-8") as f:
    f.write(txt)