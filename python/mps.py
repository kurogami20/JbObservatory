import folium
import pandas as pd

# * total
# totalMapNuitees = folium.Map(location=[43.6045, 1.444], zoom_start=7)
# geojson_data = "document\\capacites_utf8.geojson"
# state_data = pd.read_csv("document\\CVS_doc\\nuiteMois.csv")

# cp = folium.Choropleth(
#         geo_data=geojson_data,
#         name='Total des nuitées par département',
#         data=state_data,
#         columns=['Département', 'Total 2018'],
#         key_on="feature.properties.INSEE_DEP", 
#         fill_color="YlOrRd",
#         fill_opacity=0.7,
#         legend_name="Nuitées",
#         highlight=True,
#     ).add_to(totalMapNuitees)

# state_data['Département'] = state_data['Département'].astype(str).str.zfill(2)
# state_data_indexed = state_data.set_index('Département')




# for s in cp.geojson.data['features']:
#     dep = str(s['properties']['INSEE_DEP']).zfill(2)
#     s['properties']['total_nuitees'] = int(state_data_indexed.loc[dep, 'Total 2018'])

# for feat in cp.geojson.data["features"]:
#     for k, v in feat["properties"].items():
#         if isinstance(v, str):
#             feat["properties"][k] = v.encode("latin1").decode("utf-8")   
# # replace the tooltip to use existing properties
# folium.GeoJsonTooltip(
#     fields=['nom_dpt', 'total_nuitees'],
#     aliases=['Département', 'Nuitées']
# ).add_to(cp.geojson)


# folium.LayerControl().add_to(totalMapNuitees)

# totalMapNuitees.save('..\\maps\\nuiteesTotale.php')

# * janvier

janMapNuitees = folium.Map(location=[43.6045, 1.444], zoom_start=7)
geojson_data = "document\\capacites.geojson"
state_data = pd.read_csv("document\\CVS_doc\\nuiteMois.csv")

cp=folium.Choropleth(
        geo_data=geojson_data,
        name='Nuité par département de Janvier',
        data=state_data,
        columns=['Département', 'Janvier'],
        key_on="feature.properties.INSEE_DEP", 
        fill_color="YlOrRd",
        fill_opacity=0.7,
        legend_name="Nuitées",
        highlight=True,
    ).add_to(janMapNuitees)


state_data['Département'] = state_data['Département'].astype(str).str.zfill(2)
state_data_indexed = state_data.set_index('Département')

for s in cp.geojson.data['features']:
    dep = str(s['properties']['INSEE_DEP']).zfill(2)
    s['properties']['total_nuitees'] = int(state_data_indexed.loc[dep, 'Janvier'])

    
for feat in cp.geojson.data["features"]:
    for k, v in feat["properties"].items():
        if isinstance(v, str):
            feat["properties"][k] = v.encode("latin1").decode("utf-8")   
# replace the tooltip to use existing properties
folium.GeoJsonTooltip(
    fields=['nom_dpt', 'total_nuitees'],
    aliases=['Département', 'Nuitées']
).add_to(cp.geojson)


folium.LayerControl().add_to(janMapNuitees)

janMapNuitees.save('..\\maps\\nuitees_par_mois\\janvier.php')

# *fevrier

fevMapNuitees = folium.Map(location=[43.6045, 1.444], zoom_start=7)
geojson_data = "document\\capacites.geojson"
state_data = pd.read_csv("document\\CVS_doc\\nuiteMois.csv")

cp=folium.Choropleth(
        geo_data=geojson_data,
        name='Nuité par département de Février',
        data=state_data,
        columns=['Département', 'Février'],
        key_on="feature.properties.INSEE_DEP", 
        fill_color="YlOrRd",
        fill_opacity=0.7,
        legend_name="Nombre de nuitées",
        highlight=True,
    ).add_to(fevMapNuitees)


state_data['Département'] = state_data['Département'].astype(str).str.zfill(2)
state_data_indexed = state_data.set_index('Département')

for s in cp.geojson.data['features']:
    dep = str(s['properties']['INSEE_DEP']).zfill(2)
    s['properties']['total_nuitees'] = int(state_data_indexed.loc[dep, 'Février'])
    
for feat in cp.geojson.data["features"]:
    for k, v in feat["properties"].items():
        if isinstance(v, str):
            feat["properties"][k] = v.encode("latin1").decode("utf-8")   
# replace the tooltip to use existing properties
folium.GeoJsonTooltip(
    fields=['nom_dpt', 'total_nuitees'],
    aliases=['Département', 'Nuitées']
).add_to(cp.geojson)


folium.LayerControl().add_to(fevMapNuitees)

fevMapNuitees.save('..\\maps\\nuitees_par_mois\\fev.php')

#* mars

marsMapNuitees = folium.Map(location=[43.6045, 1.444], zoom_start=7)
geojson_data = "document\\capacites.geojson"
state_data = pd.read_csv("document\\CVS_doc\\nuiteMois.csv")

cp=folium.Choropleth(
        geo_data=geojson_data,
        name='Nuité par département de Mars',
        data=state_data,
        columns=['Département', 'Mars'],
        key_on="feature.properties.INSEE_DEP", 
        fill_color="YlOrRd",
        fill_opacity=0.7,
        legend_name="Nombre de nuitées",
        highlight=True,
    ).add_to(marsMapNuitees)


state_data['Département'] = state_data['Département'].astype(str).str.zfill(2)
state_data_indexed = state_data.set_index('Département')

for s in cp.geojson.data['features']:
    dep = str(s['properties']['INSEE_DEP']).zfill(2)
    s['properties']['total_nuitees'] = int(state_data_indexed.loc[dep, 'Mars'])
    
for feat in cp.geojson.data["features"]:
    for k, v in feat["properties"].items():
        if isinstance(v, str):
            feat["properties"][k] = v.encode("latin1").decode("utf-8")   
# replace the tooltip to use existing properties
folium.GeoJsonTooltip(
    fields=['nom_dpt', 'total_nuitees'],
    aliases=['Département', 'Nuitées']
).add_to(cp.geojson)


folium.LayerControl().add_to(marsMapNuitees)

marsMapNuitees.save('..\\maps\\nuitees_par_mois\\mar.php')

# *avril

avMapNuitees = folium.Map(location=[43.6045, 1.444], zoom_start=7)
geojson_data = "document\\capacites.geojson"
state_data = pd.read_csv("document\\CVS_doc\\nuiteMois.csv")

cp=folium.Choropleth(
        geo_data=geojson_data,
        name='Nuité par département de Avril',
        data=state_data,
        columns=['Département', 'Avril'],
        key_on="feature.properties.INSEE_DEP", 
        fill_color="YlOrRd",
        fill_opacity=0.7,
        legend_name="Nuitées",
        highlight=True,
    ).add_to(avMapNuitees)


state_data['Département'] = state_data['Département'].astype(str).str.zfill(2)
state_data_indexed = state_data.set_index('Département')

for s in cp.geojson.data['features']:
    dep = str(s['properties']['INSEE_DEP']).zfill(2)
    s['properties']['total_nuitees'] = int(state_data_indexed.loc[dep, 'Avril'])
    
for feat in cp.geojson.data["features"]:
    for k, v in feat["properties"].items():
        if isinstance(v, str):
            feat["properties"][k] = v.encode("latin1").decode("utf-8")   
# replace the tooltip to use existing properties
folium.GeoJsonTooltip(
    fields=['nom_dpt', 'total_nuitees'],
    aliases=['Département', 'Nuitées']
).add_to(cp.geojson)


folium.LayerControl().add_to(avMapNuitees)

avMapNuitees.save('..\\maps\\nuitees_par_mois\\av.php')

# *mai

maiMapNuitees = folium.Map(location=[43.6045, 1.444], zoom_start=7)
geojson_data = "document\\capacites.geojson"
state_data = pd.read_csv("document\\CVS_doc\\nuiteMois.csv")

cp = folium.Choropleth(
        geo_data=geojson_data,
        name='Nuité par département de Mai',
        data=state_data,
        columns=['Département', 'Mai'],
        key_on="feature.properties.INSEE_DEP", 
        fill_color="YlOrRd",
        fill_opacity=0.7,
        legend_name="Nombre de nuitées",
        highlight=True,
    ).add_to(maiMapNuitees)


state_data['Département'] = state_data['Département'].astype(str).str.zfill(2)
state_data_indexed = state_data.set_index('Département')

for s in cp.geojson.data['features']:
    dep = str(s['properties']['INSEE_DEP']).zfill(2)
    s['properties']['total_nuitees'] = int(state_data_indexed.loc[dep, 'Mai'])
    
for feat in cp.geojson.data["features"]:
    for k, v in feat["properties"].items():
        if isinstance(v, str):
            feat["properties"][k] = v.encode("latin1").decode("utf-8")   
# replace the tooltip to use existing properties
folium.GeoJsonTooltip(
    fields=['nom_dpt', 'total_nuitees'],
    aliases=['Département', 'Nuitées']
).add_to(cp.geojson)

folium.LayerControl().add_to(maiMapNuitees)

maiMapNuitees.save('..\\maps\\nuitees_par_mois\\mai.php')

# *juin

junMapNuitees = folium.Map(location=[43.6045, 1.444], zoom_start=7)
geojson_data = "document\\capacites.geojson"
state_data = pd.read_csv("document\\CVS_doc\\nuiteMois.csv")

cp=folium.Choropleth(
        geo_data=geojson_data,
        name='Nuité par département de Juin',
        data=state_data,
        columns=['Département', 'Juin'],
        key_on="feature.properties.INSEE_DEP", 
        fill_color="YlOrRd",
        fill_opacity=0.7,
        legend_name="Nombre de nuitées",
        highlight=True,
    ).add_to(junMapNuitees)


state_data['Département'] = state_data['Département'].astype(str).str.zfill(2)
state_data_indexed = state_data.set_index('Département')

for s in cp.geojson.data['features']:
    dep = str(s['properties']['INSEE_DEP']).zfill(2)
    s['properties']['total_nuitees'] = int(state_data_indexed.loc[dep, 'Juin'])
    
for feat in cp.geojson.data["features"]:
    for k, v in feat["properties"].items():
        if isinstance(v, str):
            feat["properties"][k] = v.encode("latin1").decode("utf-8")   
# replace the tooltip to use existing properties
folium.GeoJsonTooltip(
    fields=['nom_dpt', 'total_nuitees'],
    aliases=['Département', 'Nuitées']
).add_to(cp.geojson)

folium.LayerControl().add_to(junMapNuitees)

junMapNuitees.save('..\\maps\\nuitees_par_mois\\jun.php')

# *juillet

juiMapNuitees = folium.Map(location=[43.6045, 1.444], zoom_start=7)
geojson_data = "document\\capacites.geojson"
state_data = pd.read_csv("document\\CVS_doc\\nuiteMois.csv")

cp=folium.Choropleth(
        geo_data=geojson_data,
        name='Nuité par département de Juillet',
        data=state_data,
        columns=['Département', 'Juillet'],
        key_on="feature.properties.INSEE_DEP", 
        fill_color="YlOrRd",
        fill_opacity=0.7,
        legend_name="Nombre de nuitées",
        highlight=True,
    ).add_to(juiMapNuitees)


state_data['Département'] = state_data['Département'].astype(str).str.zfill(2)
state_data_indexed = state_data.set_index('Département')

for s in cp.geojson.data['features']:
    dep = str(s['properties']['INSEE_DEP']).zfill(2)
    s['properties']['total_nuitees'] = int(state_data_indexed.loc[dep, 'Juillet'])
    
for feat in cp.geojson.data["features"]:
    for k, v in feat["properties"].items():
        if isinstance(v, str):
            feat["properties"][k] = v.encode("latin1").decode("utf-8")   
# replace the tooltip to use existing properties
folium.GeoJsonTooltip(
    fields=['nom_dpt', 'total_nuitees'],
    aliases=['Département', 'Nuitées']
).add_to(cp.geojson)

folium.LayerControl().add_to(juiMapNuitees)

juiMapNuitees.save('..\\maps\\nuitees_par_mois\\jui.php')

# *août

aouMapNuitees = folium.Map(location=[43.6045, 1.444], zoom_start=7)
geojson_data = "document\\capacites.geojson"
state_data = pd.read_csv("document\\CVS_doc\\nuiteMois.csv")

cp=folium.Choropleth(
        geo_data=geojson_data,
        name='Nuité par département de Août',
        data=state_data,
        columns=['Département', 'Août'],
        key_on="feature.properties.INSEE_DEP", 
        fill_color="YlOrRd",
        fill_opacity=0.7,
        legend_name="Nombre de nuitées",
        highlight=True,
    ).add_to(aouMapNuitees)


state_data['Département'] = state_data['Département'].astype(str).str.zfill(2)
state_data_indexed = state_data.set_index('Département')

for s in cp.geojson.data['features']:
    dep = str(s['properties']['INSEE_DEP']).zfill(2)
    s['properties']['total_nuitees'] = int(state_data_indexed.loc[dep, 'Août'])
    
for feat in cp.geojson.data["features"]:
    for k, v in feat["properties"].items():
        if isinstance(v, str):
            feat["properties"][k] = v.encode("latin1").decode("utf-8")   
# replace the tooltip to use existing properties
folium.GeoJsonTooltip(
    fields=['nom_dpt', 'total_nuitees'],
    aliases=['Département', 'Nuitées']
).add_to(cp.geojson)

folium.LayerControl().add_to(aouMapNuitees)

aouMapNuitees.save('..\\maps\\nuitees_par_mois\\aou.php')

# *septembre

sepMapNuitees = folium.Map(location=[43.6045, 1.444], zoom_start=7)
geojson_data = "document\\capacites.geojson"
state_data = pd.read_csv("document\\CVS_doc\\nuiteMois.csv")

cp=folium.Choropleth(
        geo_data=geojson_data,
        name='Nuité par département de Septembre',
        data=state_data,
        columns=['Département', 'Septembre'],
        key_on="feature.properties.INSEE_DEP", 
        fill_color="YlOrRd",
        fill_opacity=0.7,
        legend_name="Nombre de nuitées",
        highlight=True,
    ).add_to(sepMapNuitees)


state_data['Département'] = state_data['Département'].astype(str).str.zfill(2)
state_data_indexed = state_data.set_index('Département')

for s in cp.geojson.data['features']:
    dep = str(s['properties']['INSEE_DEP']).zfill(2)
    s['properties']['total_nuitees'] = int(state_data_indexed.loc[dep, 'Septembre'])
    
for feat in cp.geojson.data["features"]:
    for k, v in feat["properties"].items():
        if isinstance(v, str):
            feat["properties"][k] = v.encode("latin1").decode("utf-8")   
# replace the tooltip to use existing properties
folium.GeoJsonTooltip(
    fields=['nom_dpt', 'total_nuitees'],
    aliases=['Département', 'Nuitées']
).add_to(cp.geojson)

folium.LayerControl().add_to(sepMapNuitees)

sepMapNuitees.save('..\\maps\\nuitees_par_mois\\sep.php')

# *octobre

octMapNuitees = folium.Map(location=[43.6045, 1.444], zoom_start=7)
geojson_data = "document\\capacites.geojson"
state_data = pd.read_csv("document\\CVS_doc\\nuiteMois.csv")

cp=folium.Choropleth(
        geo_data=geojson_data,
        name='Nuité par département de Octobre',
        data=state_data,
        columns=['Département', 'Octobre'],
        key_on="feature.properties.INSEE_DEP", 
        fill_color="YlOrRd",
        fill_opacity=0.7,
        legend_name="Nombre de nuitées",
        highlight=True,
    ).add_to(octMapNuitees)


state_data['Département'] = state_data['Département'].astype(str).str.zfill(2)
state_data_indexed = state_data.set_index('Département')

for s in cp.geojson.data['features']:
    dep = str(s['properties']['INSEE_DEP']).zfill(2)
    s['properties']['total_nuitees'] = int(state_data_indexed.loc[dep, 'Octobre'])
    
for feat in cp.geojson.data["features"]:
    for k, v in feat["properties"].items():
        if isinstance(v, str):
            feat["properties"][k] = v.encode("latin1").decode("utf-8")   
# replace the tooltip to use existing properties
folium.GeoJsonTooltip(
    fields=['nom_dpt', 'total_nuitees'],
    aliases=['Département', 'Nuitées']
).add_to(cp.geojson)

folium.LayerControl().add_to(octMapNuitees)

octMapNuitees.save('..\\maps\\nuitees_par_mois\\oct.php')

# *novembre

novMapNuitees = folium.Map(location=[43.6045, 1.444], zoom_start=7)
geojson_data = "document\\capacites.geojson"
state_data = pd.read_csv("document\\CVS_doc\\nuiteMois.csv")

cp=folium.Choropleth(
        geo_data=geojson_data,
        name='Nuité par département de Novembre',
        data=state_data,
        columns=['Département', 'Novembre'],
        key_on="feature.properties.INSEE_DEP", 
        fill_color="YlOrRd",
        fill_opacity=0.7,
        legend_name="Nombre de nuitées",
        highlight=True,
    ).add_to(novMapNuitees)


state_data['Département'] = state_data['Département'].astype(str).str.zfill(2)
state_data_indexed = state_data.set_index('Département')

for s in cp.geojson.data['features']:
    dep = str(s['properties']['INSEE_DEP']).zfill(2)
    s['properties']['total_nuitees'] = int(state_data_indexed.loc[dep, 'Novembre'])
    
for feat in cp.geojson.data["features"]:
    for k, v in feat["properties"].items():
        if isinstance(v, str):
            feat["properties"][k] = v.encode("latin1").decode("utf-8")   
# replace the tooltip to use existing properties
folium.GeoJsonTooltip(
    fields=['nom_dpt', 'total_nuitees'],
    aliases=['Département', 'Nuitées']
).add_to(cp.geojson)

folium.LayerControl().add_to(novMapNuitees)

novMapNuitees.save('..\\maps\\nuitees_par_mois\\nov.php')

# *décembre

decMapNuitees = folium.Map(location=[43.6045, 1.444], zoom_start=7)
geojson_data = "document\\capacites.geojson"
state_data = pd.read_csv("document\\CVS_doc\\nuiteMois.csv")

cp=folium.Choropleth(
        geo_data=geojson_data,
        name='Nuité par département de Décembre',
        data=state_data,
        columns=['Département', 'Décembre'],
        key_on="feature.properties.INSEE_DEP", 
        fill_color="YlOrRd",
        fill_opacity=0.7,
        legend_name="Nombre de nuitées",
        highlight=True,
    ).add_to(decMapNuitees)


state_data['Département'] = state_data['Département'].astype(str).str.zfill(2)
state_data_indexed = state_data.set_index('Département')

for s in cp.geojson.data['features']:
    dep = str(s['properties']['INSEE_DEP']).zfill(2)
    s['properties']['total_nuitees'] = int(state_data_indexed.loc[dep, 'Décembre'])
    
for feat in cp.geojson.data["features"]:
    for k, v in feat["properties"].items():
        if isinstance(v, str):
            feat["properties"][k] = v.encode("latin1").decode("utf-8")   
# replace the tooltip to use existing properties
folium.GeoJsonTooltip(
    fields=['nom_dpt', 'total_nuitees'],
    aliases=['Département', 'Nuitées']
).add_to(cp.geojson)

folium.LayerControl().add_to(decMapNuitees)

decMapNuitees.save('..\\maps\\nuitees_par_mois\\dec.php')
