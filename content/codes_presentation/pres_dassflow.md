---
title: "DassFlow 1D & 2D"
date: 2023-06-26T17:23:36+02:00
weight: 30
description: DassFlow (Data Assimilation for Free Surface Flows), a set of computational codes aiming at modeling free surface geophysical flows with data assimilation capabilities.
---

![1D hydraulic model](/images/1D_hydraulic_model.png)
> ##### Fine scale 1D hydraulic model with hydrological inflows of the Negro River in the Amazon basin built from multi-satellite and in situ data. From [Pujol et al. 2020, JoH]

## What is DassFlow ?

**DassFlow** ***(Data Assimilation for Free Surface Flows)*** denotes a set of computational codes aiming at modeling free surface geophysical flows with data assimilation capabilities. These flows can be **water-rivers flows** *(Newtonian rheology)* but also **ice-glaciers flows** *(power-laws rheology)* or **lavas, muds flows[^1]** etc *(based on Herschel-Bulskley rheology laws)*. 
The dynamics flow models rely, mainly but not only, on the **Shallow Water systems** *(depth-integrated equations, long-wave assumption)*.   

[^1]: These features are yet to be implemented in future releases of DassFlow.

Two code versions are available:  
{{% button href="#dassflow1d" %}}**DassFlow1D**{{% /button %}}: networks of 1D river flow models.  
{{% button href="#dassflow2d" %}}**DassFlow2D**{{% /button %}}: accurate and robust 2D flows with wet-dry front dynamics; affordable over river networks with a 1D-like 2D approach *(see Fig.)*; spatialized modeling of hydrological source terms and boundary conditions.  

{{% notice info %}}
The basic technologies of both codes are described in the [Shared technologies for all codes](/codes_presentation/pres_shared_tech) page.
{{% /notice %}}

---


## DassFlow1D
#### What does it include ?
- The **1D Shallow Water system** *(Saint-Venant’s equations)* in variables (S,Q)(x,t).
- The **Diffusive Wave equation** *(the standard one and an original two-scales one)*.
- **Multi-branches** *(rivers network)*.
- **Data Assimilation** capabilities (variational or not) from **multi-source** / multi-nature data.
- The numerical schemes are: the classical **Preissmann FD scheme** or potentially **FV schemes**.
- Documentations, benchmarks *(analytical, toys, real data)*. 
- Global Sensitivity Analyses / UQ are quite easy to implement by interfacing with *e.g. OpenTurns library.*
- An additional original flow model dedicated to spatial hydrology is available: a **low-Froude algebraic model**.  

#### Key applications
- 1D river flows, potentially network.
- "Effective cross-sections" inference.
- Assimilation of multi-source data.
- Spatial hydrology: see {{% button href="/codes_presentation/pres_hivdi" target="_self" %}}the HiVDI algorithm{{% /button %}}, which enables to estimate rivers discharge at global scale from SWOT measurements.

{{% notice tip %}}
[Test cases and real-world applications of HiVDI (based on DassFlow1D)](/examples/ex_hivdi_dassflow1d)
{{% /notice %}}


---


## DassFlow2D
#### What does it include ?
- The **2D Shallow Water system in variables (h,qx,qy)** solved by accurate FV schemes *(1st order or actual 2nd order)*. Robust treatment of wet-dry front dynamics.
- A capability to locally **degenerate the 2D model into a 1D-like model** (therefore much less CPU-time consuming).
This enables to build up e.g. multiple branches 1D-like models with 2D zooms at the branches junction, or in highest-interest areas, or in inundations areas.  
- **Various Boundary Conditions** enable to tackle real-world problems.
- The **GR4 hydrological model** *(developed by L. Santos and G. Thirel from INRAe, HYCAR Research Unit)* is a lumped hydrological model implemented in a semi-distributed manner in DassFLow2D.
This enables to perform hydrological calibration via hydraulic information feedback in a sequential coupling GR4 - Shallow Water 2D.  
To consider a fully distributed hydrological model, please use {{% button href="/codes_presentation/pres_smash" target="_blank" %}}SMASH{{% /button %}}.  
- The **corresponding adjoint code** and a complete **4D-var optimization process** *(see the {{% button href="/codes_presentation/pres_shared_tech" target="_blank" %}}Shared technologies{{% /button %}} page)*. 
- Parallel computations (MPI Fortran).
- **Assimilation** of multi-source data.
- **Documentations**.
- **Benchmarks** *(analytical, toys, real data cases)*. 
- An easy use of **Python libraries** such as **deep learning, signal processing and statistics libraries** since the Fortran computational kernel code is **wrapped in Python** *(see the {{% button href="/codes_presentation/pres_shared_tech" target="_blank" %}}Shared technologies{{% /button %}} page)*.
- A **Reduced Order Model (ROMs)** of DassFlow2D is in progress.

#### Key applications
- **Rivers network dynamics** with local zooms, *e.g. in inundation areas (integrated 1D-2D flow solvers)*.  
- **Flood plain dynamics** with wet-dry fronts.  
- **Lava / mud flows** (Herschel-Bulckley rheology).  

![Garonne_river](/images/df2d_garonne_river.png?width=50pc)
{{% center_align %}}##### *Full 2D computations of Garonne river (Toulouse-Castelsarrasin portion, southern France). 87O K cells (MPI computations both for the direct and the adjoint codes). Datasets provided by D. Dartus et al. IMFT, regional flood forecasting center (SPC Toulouse). Solver from [[J. Monnier, F. Couderc, D. Dartus, K. Larnier, R. Madec, J.P. Vila. AWR 2016.](https://www.sciencedirect.com/science/article/pii/S0309170816302214?via%3Dihub)]*{{% /center_align %}}

![Bayonne_zoom](/images/df2d_bayonne.png?width=25pc)
{{% center_align %}}##### *Mixed 1D-like / 2D computations of the Adour river southwestern France. Datasets provided by the regional flood forecasting center (SPC GAD). Image from [[Pujol-Garambois-Monnier, GMD 2022](https://gmd.copernicus.org/articles/15/6085/2022/)].*{{% /center_align %}}

{{% notice tip %}}
[Test cases and real-world applications of DassFlow2D](/examples/ex_dassflow2d)
{{% /notice %}}  


> {{< expand "Greetings to the great former contributors of DassFlow!" >}}

- <strong>Leo Pujol</strong>, PhD ICUBE Strasbourg-IMT-CNES. (Amazing update! 2D-1D integrated version, hydrology coupling, wrapping, applications) (2018-2022).<br>
- <strong>Thibault Malou</strong>, PhD IMT-INSA CLS corp. (covariance matrices, diffusive wave equations adapted tp spatial observations) (2019-2021).<br>
- <strong>David Kibe</strong>, PhD U. Christchurch NZ - INSA IMT (Herschel-Buckley rheology term (2021)).<br>
- <strong>Shenuyan MA</strong> and <strong>Ngo Truyen Huynh</strong>, INSA students, wrapping of the 2D version (2020-21).<br>
- <strong>J. Zhu</strong>, postdoc INSA-IMT (CNES funds), DassFlow-Py including deep learning (2018).<br>
Jiamin is R&D Eng. in optimal control, I.A. in a private company.<br>
- <strong>Jonas Verley</strong> INSA-IMT (CNES funds) (2017).<br>
- <strong>Pierre Brisset</strong>, Eng. INSA-IMT (CNES funds), DassFlow 1D, 1st main architect (2014-16).<br>
Pierre is Res. eng. in computational sciences (HPC, inverse methods) in a private company.<br>
- <strong>Ronan Madec</strong>, Res. Eng. IMT Toulouse and ANR AMAC. Adjoint MPI codes, DassFlow2D & 3D FE version (2010-13).<br>
Ronan is Res. eng. in computational sciences (HPC, inverse methods) in a private company.<br>
- <strong>F. Couderc</strong>, Res. Eng. CNRS IMT & INSA Toulouse. MPI features in DassFlow 2D, Perl scripts (2010-12).<br>
- <strong>J.-P. Vila</strong>, Prof. INSA Toulouse (2010-12). Finite Volume schemes order 2 (MUSCL) for 2D SWE (2010-12).<br>
- <strong>N. Martin</strong>, IMT & INSA Toulouse (PhD 2013). Adjoint code / gradient accuracy, FE solvers (2010-13).<br>
Nathan became R&D Eng. in computational sciences (FE software) in a private company.<br>
- <strong>J. Marin</strong>, INRIA Grenoble (Res. engineer 2007). 2nd main architect, DassFlow2D (2006-08).<br>
Joel is Res. eng. in computational sciences in a private company.<br>
- <strong>I. Gejadze</strong>, INRIA, lab. LJK (postdoc 2006). coupled version 1D-2D.<br>
Igor is Senior Researcher at IRSTEA Montpellier (SIC2 hydraulic model).<br>
- <strong>X. Lai</strong>, INRIA, lab. LJK (postdoc 2005) 1st real test cases with image data (version non maintained).<br>
Xijun is researcher at NIGLAS, Nanking, China.<br>
- <strong>M. Honnorat</strong>, PhD INP Grenoble & INRIA, lab. LJK (PhD 2007). 1st main architect, DassFlow2D (2004-06).<br>
Marc is Res. eng. in computational sciences (sometimes as a private consultant).<br>
{{< /expand >}}

---


## Other versions

- **DassFlow-RheoPy**: DassFlow-RheoPy denotes purely Python codes for various shallow flows models: multi-regimes non-Newtonian fluids (power-law, Bingham, Herschel-Bulkley rheologies).  
    - One-equation models (lubrication type).
    - Two-equation models (Shallow-Water type).
    - Plug type model (SSA in glaciology).  
    - Finite Elements schemes (FEniCS library).
    - Continuous adjoint equations.

**Applications:** Glaciers dynamics (e.g. in ice-sheets), volcano lavas.

> ##### *For examples in glaciology:*
> ##### *[J. Monnier, J. Zhu. "Physically-constrained data-driven inversions to infer the bed topography beneath glaciers flows. Application to East Antarctica". Computational Geosciences, vol. 25, pp 1793-1819, 2021. DOI](https://link.springer.com/article/10.1007/s10596-021-10070-1)*


- **DassFlow-3d**: Stokes like systems-power law rheology, low inertia, FE schemes.

{{% notice info %}}
DassFlow is developed under the [GNU AFFERO GENERAL PUBLIC LICENSE](https://github.com/teamdigitale/licenses/blob/master/AGPL-3.0-or-later).  
For more information, please contact the PIs.
{{% /notice %}}
{{% notice info %}}s
Some **references** for DassFlow are available on [this page](/shortcuts/references).
{{% /notice %}}
