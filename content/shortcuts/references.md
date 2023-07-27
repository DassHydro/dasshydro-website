---
title: "A few references"
date: 2023-07-19T15:00:32+02:00
draft: true
hidden: true
---
This pages contains a non exhaustive list of references for the different codes: {{% button href="/shortcuts/references/#references-for-dassflow" %}}DassFlow{{% /button %}}, {{% button href="/shortcuts/references/#references-for-smash" %}}SMASH{{% /button %}}, and {{% button href="/shortcuts/references/#references-for-dasshydro" %}}DassHydro{{% /button %}}.

## References for DassFlow
#### References introducing the approaches, methods, algorithms (and not those focusing on new applications, new flows, databases)

- **Know-hows on VDA & fundamentals of DassFlow's algorithms:** basics of inverse problems, optimal control, gradient-based methods, gradient computations, adjoints (equations, codes), codes assessements, covariances operators, regularizations terms, link with BLUE - Kalman filters etc : 
    > ##### *J. Monnier, "Variationnal Data Assimilation", Open Online Course, INSA - University of Toulouse. consult the course.*

- **Discharge estimation from altimetry data: HiVDI algorithm** (based on 1D and 0.5D flow models). River discharge estimations, bathymetry estimations, identifiability maps (1D SW model = Saint-Venant's equations):
    > ##### *K. Larnier, J. Monnier. "Learning river features from altimetry".*  
    > ##### *K. Larnier, J. Monnier, P.-A. Garambois, J. Verley. "Estimation of river discharges from altimetry". Inv. Pb Sc. Eng.(IPSE), 2020.*  
    > ##### *P. Brisset, J. Monnier, P.-A. Garambois, H. Roux. "On the assimilation of altimetry data in 1D Saint-Venant river models".  Adv. Water Ress. (AWR) Vol. 19, 2018.*  
    *See also {{% button href="/codes_presentation/pres_hivdi/#initial---historical-thoughts" %}}a poster for HiVDI and an application{{% /button %}}.*

- **The complete hydraulic 2d/1d -hydrology chain few advanced applications**
    > ##### *L. Pujol, P.-A. Garambois, J. Monnier, K. Larnier et al., submitted, 2022.*

- **A few advanced applications (including complex flows analysis)**
    > ##### *L. Pujol, P.-A. Garambois, P. Finaud-Guyot, J. Monnier, K. Larnier, R. Mose, S. Biancamaria, H. Yesou, D. Moreira, A. Paris, S. Calmant. "Estimation of Multiple Inflows and Effective Channel by Assimilation of Multi-satellite Hydraulic Signatures: The Ungauged Anabranching Negro River". J. of Hydrology (JoH), 2020.*  
    > ##### *P.-A. Garambois, K. Larnier, J. Monnier, P. Finaud-Guyot, J. Verley, A. Montazem, S. Calmant. "Variational inference of effective channel and ungauged anabranching river discharge from multi-satellite water heights of different spatial sparsity". J. of Hydrology (JoH), 2019.*  
    > ##### *Tuozzolo, S., Lind, G., Overstreet, B., Mangano, J., Fonstad, M., Hagemann, M., Frasson, R., Larnier, K., Garambois, P.-A., Monnier, J., Durand, M. "Estimating river discharge with swath altimetry: A proof of concept using AirSWOT observations". Geophys. Res. Lett. (GRL), 2019.* 

- **2D flows & VDA inversions**
    - *Flood plain & FV schemes (including 2nd order VF schemes, wet-dry front dynamics, variational sensitivities)*:
        > ##### *J. Monnier, F. Couderc, D. Dartus, K. Larnier, R. Madec, J.-P. Vila. "Inverse computational algorithms for 2D shallow water equations in presence of wet dry fronts. Application to flood plain dynamics". Adv. Water Res. 2016.* 

    - *Assimilation of a flood plain image into 2D shallow water model*:
        > ##### *R. Hostache, X. Lai, J. Monnier, C. Puech. J. Hydrology (JoH) (2010).*
        > ##### *X. Lai, J. Monnier J. Hydrology (2009) and M. Honnorat, X. Lai, J. Monnier, FX Le Dimet, Computational Methods for Water Ressources (2006) -Pearl river, unpublished elsewhere-.* 

    - *Assimilation of Lagrangian surface data*: 
        > ##### *M. Honnorat, J. Monnier, FX Le Dimet, Comput. Visu. Sc. (2009).*
        > ##### *M. Honnorat, J. Monnier, N. Riviere, E. Huot, FX Le Dimet, Comput. Visu. Sc. (2010).*  

- **Bed topography estimations beneath glaciers flows** (mix of physical-based models and statistical-learning methods):
    > ##### *J. Monnier, J. Zhu. "Estimations of bed topography elevation inland East Antarctica".* 
    > ##### *J. Monnier, J. Zhu. "Inference of the bottom topography in anisothermal mildly-sheared shallow ice flows". Comput. Meth. Applied Meth. Eng.". CMAME 2019.*   
    *Code version developped in Python.*

- **Coupling 1D-2D SW models:**
    > ##### *J. Marin, J. Monnier, Math. Comput. Simul. (2009), E. Fernandez-Nieto, J. Marin, J. Monnier, Comput. Fluid. (2010).*  
    > ##### *I. Gejadze, J. Monnier, Comp. Meth. Appl. Mech. Engnr. (2007).*

- **Save memory and tune your gradient accuracy** if using algorithmic - automatic differentiation:
    > ##### *N. Martin, J. Monnier, The Cryosphere (2013) and N.Martin's PhD thesis 2013.*  

- **Inference of rheometry & conditions at bottom in power-law fluid flows** (low inertial flows e.g. glacier, lava flows): 
    > ##### *N. Martin, J. Monnier, Europ. J. Mech. B/Fluids (2014).*

- **Variational sensitivities for Stokes power-law flows and advanced four fields FE schemes:**
    > ##### *N. Martin, J. Monnier, SIAM JSC (2013) and N.Martin's PhD thesis 2013.*

---

## References for SMASH

- **Bayesian-like parameter estimation algorithm:** 
    > ##### *[Huynh et al. in prep] following [Chelil et al. 2022].*
- **Variational Data Assimilation (VDA):** 
    > ##### *[Jay-Allemand et al. 2020]* 
- **Hybrid Variational Data Assimilation**, Parameter regionalization (HVDA-PR):
    > ##### *[Huynh et al. 2023a].*
- **Bayesian-Guided Multivariate Regression** and **Bayesian estimation tools** that can be used alone or with HD algorithms:
    > ##### *[Huynh et al. 2023b]*
- **Rainfall moments and Hydrological signatures** computable at multiple scales ; signatures usable in optimization:
    > ##### *[Huynh et al. 2022].*
- **LSTM algorithms** applicable to model inputs-outputs:
    > ##### *[Huynh et al. in prep] after [Hashemi et al. 2021].*

---

## References for DassHydro

*Coming soon....*