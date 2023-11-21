---
title: "SMASH"
date: 2023-06-26T17:23:45+02:00
weight: 40
description: SMASH (Spatially distributed Modelling and Assimilation for Hydrology), an open-source Python-Fortran library that provides a variety of user-friendly routines for spatially distributed hydrological modeling and multisource data-assimilation.
---
![watershed](/images/overview_smash.png?width=30pc)

## What is SMASH ?

**SMASH** ***Spatially distributed Modeling and Assimilation for Hydrology*** denotes a computational code aiming at simulating discharge hydrographs and hydrological states at any spatial location within a basin and reproduce the hydrological response of contrasted catchments. It contains several hydrological operators and flexible model structures with data assimilation and sensitivity analysis algorithms. The code is designed both for operational forecasting of floods and low flows, and can take advantage of spatially distributed meteorological forcings, physiographic data and hydrometric observations.

The code is available on {{% button href="https://github.com/DassHydro/dassflow2d" icon="fab fa-github" target="_blank" %}}GitHub{{% /button %}} and its SPHINX documentation on the {{% button href="https://smash.recover.inrae.fr" target="_blank" icon="fas fa-book" %}}Documentation{{% /button %}} page.

{{% notice info %}}
The basic technologies of the code are described in the [Shared technologies for all codes](/codes_presentation/pres_shared_tech) page.
{{% /notice %}}
#### What does it include ?

**SMASH** is a modular platform that contains conceptual representations and numerical approximations of dominant hydrological processes while aiming to maintain a relative parsimony. It also contains several algorithms for **pre and post-processing**, **signal analysis**, **model optimization** and **data assimilation** over large datasets. It originally enables to use variational data assimilation and hybrid methods based on statistical/machine learning approaches. SMASH enables to work at multiple spatio-temporal resolutions, with heterogeneous data in nature and sampling.

**Multiple flow operators** can be combined to describe spatialized hydrological processes at pixel scale, including runoff production, and flow routing towards catchment outlet. These operators are based on effective and widely used conceptualizations and models used in the hydrology community. 
- GR-like (cf. [Perrin et al. 2003], [Brief history of GR models](https://webgr.inrae.fr/en/models/a-brief-history/)).
- VIC-like (cf. [Liang et al. 1994], [VIC overview](https://vic.readthedocs.io/en/master/Overview/ModelOverview/)).
- Lateral flow routing with conceptual models or Kinematic wave.

**Several optimization algorithms can be considered: see {{% button href="/codes_presentation/pres_shared_tech" target="_blank" %}}Shared technologies for all codes{{% /button %}}**.  <br>

**Different estimation methods have been investigated, for example:**
- **Bayesian-like parameter estimation algorithm** [Huynh et al. in prep] following [Chelil et al. 2022].
- **Variational Data Assimilation (VDA)** [Jay-Allemand et al. 2020] and **Hybrid Variational Data Assimilation** Parameter regionalization (HVDA-PR) [Huynh et al. 2023a].
- **Bayesian-Guided Multivariate Regression** [Huynh et al. 2023b], **Bayesian estimation tools** that can be used alone or with HD algorithms.
- **Rainfall moments and Hydrological signatures** can be computed at multiple scales ; signatures can be used in optimization [Huynh et al. 2022].
- **LSTM algorithms** applicable to model inputs-outputs [Huynh et al. in prep] after [Hashemi et al. 2021].

#### Key applications

- Floods forecasting over the French territory (underly the [VigiCrues Flash platform](https://apic-vigicruesflash.fr/?mode=fr&area=fr)).
- Regionalization from worldwide databases.

{{% notice tip %}}
[Test cases and real-world applications of SMASH](/examples/ex_smash)
{{% /notice %}}

