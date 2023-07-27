---
title: "HIVDI algorithm (SWOT Mission)"
date: 2023-06-26T17:23:49+02:00
draft: true
weight: 50
description: Algorithm dedicated to spatial hydrology using NASA-CNES et al. satellite data.
---
![Inverse_sat_problem](/images/overview_hivdi.png?width=50pc)
![DF1D_geometry](/images/overview_hivdi_geometry.png?width=45pc)
> ##### **Description of the solved inverse problem. Images extracted from** *[Larnier-Monnier, Compt. GeoSci. 2023].*
## What is HiVDI ?
> **HiVDI = Hybrid Hierarchical Variational Discharge Inference**  

**The HiVDI algorithm** aims at estimating rivers discharge and rivers bathymetry from measurements of the **SWOT** instrument *([NASA](https://swot.jpl.nasa.gov)-[CNES](https://swot.cnes.fr/en/SWOT/index.htm) et al. mission)*.  
In a nutshell, the algorithm relies on {{% button href="/codes_presentation/pres_dassflow/#dassflow1d" target="_blank" %}}DassFlow1D code{{% /button %}}, **Deep Learning** and a **Bayesian analysis**, see figure below *(details available in [Larnier-Monnier 2023])*.
![workflow_hivdi](/images/workflow_hivdi.png?width=45pc)

{{% notice info %}}
[The algorithm is here available upon simple request](/download/dl_hivdi).
{{% /notice %}}

#### SWOT measurements
[SWOT](https://swot.jpl.nasa.gov/science/hydrology/) instrument is an altimeter providing **Water Surface Elevation (WSE)** and **river width measurements** at ~250 m scale (with an accuracy +/-10cm for WSE). Each overpass provides two swaths of 60 km width each at ~10-20 days frequency depending on the location on Earth.  
Here a [report of historical thoughts](https://ntrs.nasa.gov/citations/20120004248) of founders. 
![SWOT Mission](/images/swot_mission.png)
{{% center_align %}}##### *Figure. (L) SWOT mission (launched nov. 2022, NASA-CNES et al.). (R) Number of reaches (~10 km long) observed by SWOT instrument: the [SWORD](http://gaia.geosci.unc.edu/SWORD/) database from [Alteneau-Pavelsky et al. (2021)]. (SWOT Science Team).*{{% /center_align %}}

{{% button href="/examples/ex_hivdi_dassflow1d" %}}HiVDI results{{% /button %}}

{{% notice tip %}}
[Test cases and real-world applications of HiVDI](/examples/ex_hivdi_dassflow1d)
{{% /notice %}}


#### Initial - "historical" thoughts
Below a few short notes on the SWOT blog too:
- **April 2016:**  [On Variational Data Assimilation of SWOT-like data in 1D and 2D river flow models](https://swotdawg.wordpress.com/2016/04/16/on-variational-data-assimilation-of-swot-like-data-in-1d-and-2d-river-flow-model/).
- **Nov. 2013:** [On Variational sensitivities, data assimilation and inversion for small scale river flows](https://swotdawg.wordpress.com/2013/11/30/on-variational-sensitivities-data-assimilation-and-inversion-for-small-scale-river-flows/).
- {{% attachments title="Dec. 2018: posters at AGU meeting" style="grey" pattern=".*\.pdf" /%}}